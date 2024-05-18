@extends('layouts.main')
@push('head')

<title>Create Task</title>

@endpush

@section('main-section')

<div class="container-fluid d-flex flex-column h-100 p-0">
  <div class="bg-image"></div>  <div class="content d-flex justify-content-center align-items-center h-100">
    <div class="card shadow-lg p-5 bg-white rounded">  <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="display-4 font-weight-bold mb-0">Create Task</h2>  <a href="{{ route('homepage') }}" class="btn btn-primary">Back</a>
      </div>

      <div class="card-body">
        <form action="{{ route("task.store") }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control">
            @error('phone')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="text" name="mail" class="form-control">
            @error('mail')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="division" class="form-label">Division</label>
            <input type="text" name="division" class="form-control">
            @error('division')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="work" class="form-label">Work</label>
            <input type="text" name="work" class="form-control">
            @error('work')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="dueDate" class="form-label">Due Date</label>
            <input type="date" name="dueDate" class="form-control">
            @error('dueDate')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="picture" class="form-label">Upload Picture</label>
            <input type="file" name="picture" class="form-control">
            @error('picture')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary btn-lg mt-4">Add Task</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
