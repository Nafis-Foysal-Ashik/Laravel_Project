@extends('layouts.main')

@section('title', 'Available Information')

@section('main-section')
<div class="container py-4">
    <h1 class="my-4">Available Information</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to submit available information -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span>Add New Available Information</span>
            <a href="{{ route('homepage') }}" class="btn btn-primary">Back</a>
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
                    <label for="division" class="form-label">Division</label>
                    <input type="text" class="form-control" id="phone" name="division">
                </div>
                <div class="mb-3">
                    <label for="work" class="form-label">Work</label>
                    <input type="text" class="form-control" id="phone" name="work">
                </div>
                <div class="form-group mb-3">
                    <label for="picture" class="form-label">Upload Picture</label>
                    <input type="file" name="picture" class="form-control">
                    @error('picture')
                        <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
