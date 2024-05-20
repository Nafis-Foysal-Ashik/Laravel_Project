@extends('layouts.main')
@section('title', 'Available Information')

@section('main-section')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Available Information</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (count($availables) > 0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($availables as $available)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('uploads/'.$available->picture) }}" class="card-img-top rounded-circle p-3 mx-auto d-block" alt="Task Picture" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $available->fullname }}</h5>
                                <p class="card-text"><strong>Email:</strong> {{ $available->email }}</p>
                                <p class="card-text"><strong>Phone:</strong> {{ $available->phone }}</p>
                                <p class="card-text"><strong>Address:</strong> {{ $available->address }}</p>
                                <p class="card-text"><strong>Rating:</strong> {{ $available->rating }}</p>
                            </div>
                            {{-- <div class="card-footer">
                                <form action="{{ route('book-now', $available->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Book Now</button>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                No available information found.
            </div>
        @endif
    </div>
@endsection
