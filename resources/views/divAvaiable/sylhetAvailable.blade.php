@extends('layouts.main')

@section('title', 'Available Information')

@push('head')
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<style>
    .card-img-top {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
    }
    .card-title {
        font-weight: bold;
    }
    .card-text {
        font-size: 0.9rem;
    }
    .card-footer {
        background-color: transparent;
        border-top: 0;
    }
    .btn-custom {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        transition: background-color 0.2s, border-color 0.2s;
    }
    .btn-custom:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
@endpush

@push('scripts')
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endpush

@section('main-section')
<div class="container my-5">
    <h1 class="mb-4 text-center">Available Information</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    @if (count($ava) > 0)
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($ava as $available)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('uploads/'.$available->picture) }}" class="card-img-top p-3 mx-auto d-block" alt="User Picture">
                        <div class="card-body">
                            <h5 class="card-title">{{ $available->fullname }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $available->email }}</p>
                            <p class="card-text"><strong>Phone:</strong> {{ $available->phone }}</p>
                            <p class="card-text"><strong>Division:</strong> {{ $available->division }}</p>
                            <p class="card-text"><strong>Work:</strong> {{ $available->work }}</p>
                            <p class="card-text"><strong>Address:</strong> {{ $available->address }}</p>
                            <p class="card-text"><strong>Rating:</strong> {{ $available->rating }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-around">
                            <form action="{{ route('messagePage') }}" method="POST">
                                @csrf
                                <input type="hidden" name="name" value="{{ $available->fullname }}">
                                <input type="hidden" name="email" value="{{ $available->email }}">
                                <button type="submit" class="btn btn-custom btn-sm">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center" role="alert">
            No available information found.
        </div>
    @endif
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

@endsection
