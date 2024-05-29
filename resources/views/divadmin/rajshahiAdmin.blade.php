@extends('layouts.main')

@push('head')
  <title>Task Management System</title>
  <style>
    /* Apply consistent image size to all `.card-img-top` elements */
    .card-img-top {
      width: 100px; /* Adjust as needed for your desired size */
      height: 100px; /* Maintain aspect ratio (optional) */
      object-fit: cover; /* Crop to fit container (optional) */
      margin: 0 auto; /* Center the image */
      display: block; /* Ensure the image is a block element */
    }

    .card {
      transition: transform 0.2s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
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

    .h2 {
      color: #007bff;
      font-weight: bold;
    }

    .container {
      padding-top: 30px;
    }
  </style>
@endpush

@section('main-section')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>All Tasks</h2>

        @if (session('name') && session('email'))
        <div class="alert alert-info" role="alert">
            New booking request from {{ session('name') }} ({{ session('email') }}).
        </div>
    @endif

        {{-- <div class="d-flex gap-2">
          <a href="{{ route("createpage") }}" class="btn btn-custom">Add Task</a>
          <a href="{{ route("loginpage") }}" class="btn btn-custom">Sign Up</a>
          <a href="{{ route("available") }}" class="btn btn-custom">Available User</a>
          <a href="{{ route("availablePage") }}" class="btn btn-custom">Add Available User</a>
          <a href="{{ route("messagePage") }}" class="btn btn-custom">Message</a>
        </div> --}}
    </div>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($tasks as $task)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('uploads/'.$task->picture) }}" class="card-img-top rounded-circle mt-3" alt="Task Picture">
          <div class="card-body">
            <h5 class="card-title text-center">{{ $task->name }}</h5>
            <p class="card-text"><strong>Phone:</strong> {{ $task->phone }}</p>
            <p class="card-text"><strong>Mail:</strong> {{ $task->mail }}</p>
            <p class="card-text"><strong>Division:</strong> {{ $task->division }}</p>
            <p class="card-text"><strong>Work:</strong> {{ $task->work }}</p>
            <p class="card-text"><strong>Due Date:</strong> {{ $task->dueDate }}</p>
            <div class="d-flex justify-content-around">
              <a href="{{ route("editpage", $task->id) }}" class="btn btn-success btn-sm">Update</a>
              <a href="{{ route("deletepage", $task->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
  $(document).ready(function(){
    $('#example').DataTable();
  });
</script>
@endsection
