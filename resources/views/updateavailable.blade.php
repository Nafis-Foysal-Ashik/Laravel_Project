@extends('layouts.main')

@push('head')
<title>Update Task</title>
<style>
    .form-label {
        font-weight: bold;
    }
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        padding: 2rem;
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
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <h2>Update {{ $available->fullname }} Status</h2>
        <a href="{{ route('homepage') }}" class="btn btn-custom">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('task.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                {{-- <div class="mb-3">
                    <label for="picture" class="form-label">Upload Picture:</label> --}}
                    {{-- @if($task->picture)
                        <div class="mb-3">
                            <img src="{{ asset('uploads/' . $task->picture) }}" alt="Current Picture" class="img-thumbnail" style="max-width: 150px;">
                        </div>
                    @endif --}}
                    {{-- <input type="file" class="form-control" id="picture" name="picture" value="<img src="{{ asset('uploads/' . $available->picture) }}>
                </div> --}}

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $available->fullname }}">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $available->phone }}">
                </div>

                <div class="mb-3">
                    <label for="mail" class="form-label">E-mail</label>
                    <input type="email" name="mail" class="form-control" id="mail" value="{{ $available->email }}">
                </div>

                <div class="mb-3">
                    <label for="division" class="form-label">Division</label>
                    <input type="text" name="division" class="form-control" id="division" value="{{ $available->division }}">
                </div>

                <div class="mb-3">
                    <label for="work" class="form-label">Work</label>
                    <input type="text" name="work" class="form-control" id="work"  value="{{ $available->work }}">

                </div>

                <div class="mb-3">
                    <label for="dueDate" class="form-label">Dead-Line</label>
                    <input type="date" name="dueDate" class="form-control" id="dueDate">
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">Upload Picture:</label>
                    <input type="file" class="form-control" id="picture" name="picture" value="<img src="{{ asset('uploads/' . $available->picture) }}>
                    {{-- <img type="file" class="form-control" id= "picture" name="picture" src="{{ (!empty($available->picture)) ? url(('uploads/' . $available->picture)):url('upload/no_image.jpg') }}" alt="Admin" height="120px" width="150px" >
                    <input type="file" class="form-control" id="picture" name="picture" value="<img src="{{ asset('uploads/' . $available->picture) }}> --}}
                </div>

                <input type="hidden" name="id" value="{{ $available->id }}">
                <button type="submit" class="btn btn-custom btn-lg mt-4">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
