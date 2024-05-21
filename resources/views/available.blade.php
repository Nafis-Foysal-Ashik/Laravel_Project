@extends('layouts.main')
@section('title', 'Available Information')

@push('head')
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

@section('main-section')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Available Employee Information</h1>

        {{-- @if (session('name') && session('email'))
        <div class="alert alert-info" role="alert">
            New booking request from {{ session('name') }} ({{ session('email') }}).
        </div>
    @endif --}}

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h7 class="display-6 mb-0">Showing available user</h7>  <a href="{{ route('homepage') }}" class="btn btn-primary">Back</a>
          </div>

        @if (count($availables) > 0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($availables as $available)
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
                                <a href="{{ route('editavailablepage', $available->id) }}" class="btn btn-custom btn-sm">Update Available</a>
                                <a href="{{ route('deleteavailablepage', $available->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
@endsection
