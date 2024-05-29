@extends('layouts.main')

@push('head')
<title>Update Task</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 2rem;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .btn-custom {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        transition: background-color 0.2s, border-color 0.2s;
        border-radius: 5px;
    }

    .btn-custom:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
@endpush

@section('main-section')
<div class="container">
    <div class="row justify-content-between align-items-center my-5">
        <div class="col-md-6">
            <h2>Update Task</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('homepage') }}" class="btn btn-custom">Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('updatepage') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="picture" class="form-label">Upload Picture:</label>
                    @if($task->picture)
                        <div class="mb-3">
                            <img src="{{ asset('uploads/' . $task->picture) }}" alt="Current Picture" class="img-thumbnail" style="max-width: 150px;">
                        </div>
                    @endif
                    <input type="file" class="form-control-file" id="picture" name="picture" value="">
                    @error('picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>

                    <input type="text" name="name" class="form-control" id="name" value="{{ $task->name }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $task->phone }}">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="mail" class="form-label">E-mail</label>
                    <input type="email" name="mail" class="form-control" id="mail" value="{{ $task->mail }}">
                    @error('mail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="division" class="form-label">Division</label>
                    <input type="text" name="division" class="form-control" id="division" value="{{ $task->division }}">
                    @error('division')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="work" class="form-label">Work</label>
                    <input type="text" name="work" class="form-control" id="work" value="{{ $task->work }}">
                    @error('work')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="dueDate" class="form-label">Dead-Line</label>
                    <input type="date" name="dueDate" class="form-control" id="dueDate" value="{{ $task->dueDate }}">
                    @error('dueDate')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <input type="hidden" name="id" value="{{ $task->id }}">
                <button type="submit" class="btn btn-custom btn-block mt-4">Update Task</button>
            </form>
        </div>
    </div>
</div>
@endsection
