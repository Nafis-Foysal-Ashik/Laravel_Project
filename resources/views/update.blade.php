@extends('layouts.main')
    @push('head')

    <title>Upadate Task</title>

    @endpush

    @section('main-section')

    <div class="container">
        <div class="d-flex justify-content-between aling-items-center my-5">
            <div class="h2">Update Task</div>
            <a href="{{ route("homepage") }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route("updatepage") }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="picture" class="form-label">Upload Picture:</label>
                        @if($task->picture)
                            <div class="mb-3">
                                Current Picture: {{ $task->picture }}
                            </div>
                        @endif
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>

                    <label for="" class="form-label mt-4">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $task->name }}">

                    <label for="" class="form-label mt-4">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $task->phone }}">

                    <label for="" class="form-label mt-4">E-mail</label>
                    <input type="text" name="mail" class="form-control" value="{{ $task->mail }}">

                    <label for="" class="form-label mt-4">Division</label>
                    <input type="text" name="division" class="form-control" value="{{ $task->division }}">

                    <label for="" class="form-label mt-4">Work</label>
                    <input type="text" name="work" class="form-control" value="{{ $task->work }}">

                    <label for="" class="form-label mt-4">Due Date</label>
                    <input type="date" name="dueDate" class="form-control" value="{{ $task->dueDate }}">

                    <input type="number" name="id" value="{{ $task->id }}" hidden >
                    <button class="btn btn-primary btn-lg mt-4">Update Task</button>
                </form>
            </div>
        </div>

    </div>


    @endsection
