@extends('layouts.main')

@section('title', 'Available Information')

@section('main-section')
<div class="container py-4">
    <h1 class="my-4">Customer LogIn</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to submit available information -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Add New Available Information
        </div>
        <div class="card-body">
            <form action="{{ route('available.store') }}" method="POST" enctype="multipart/form-data"> <!-- Add enctype here -->
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div> --}}

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>

                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
</div>
@endsection
