@extends('layouts.main')

@push('head')
  <title>Task Management System</title>
  <style>
    /* Apply consistent image size to all `.card-img-top` elements */
    .card-img-top {
      width: 100px; /* Adjust as needed for your desired size */
      height: 100px; /* Maintain aspect ratio (optional) */
      object-fit: cover; /* Crop to fit container (optional) */
    }
  </style>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Task</div>
        <br> <div class="d-flex gap-2"> <a href="{{ route("createpage") }}" class="btn btn-primary custom-btn">Add Task</a>
          <a href="{{ route("loginpage") }}" class="btn btn-primary custom-btn">Sign Up</a>
          <a href="{{ route("available") }}" class="btn btn-primary custom-btn">Available User</a>
          <a href="{{ route("availablePage") }}" class="btn btn-primary custom-btn">Add Available User</a>

        </div>
      </div>

  {{-- <a href="{{ route("khulna") }}" class="btn btn-primary">Khulna</a>
  <a href="{{ route("khulna") }}" class="btn btn-primary">Dhaka</a>
  <a href="{{ route("khulna") }}" class="btn btn-primary">Rajshahi</a>
  <a href="{{ route("khulna") }}" class="btn btn-primary">Sylhet</a>
  <a href="{{ route("khulna") }}" class="btn btn-primary">Chottogram</a>
  <a href="{{ route("khulna") }}" class="btn btn-primary">Barisal</a> --}}
</div>

<div class="p-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($tasks as $task)
      <div class="col">
        <div class="card">
          <img src="{{ asset('uploads/'.$task->picture) }}" class="card-img-top rounded-circle" alt="Task Picture">

          <div class="card-body">
            <h5 class="card-title">{{ $task->name }}</h5>
            <p class="card-text"><strong>Phone:</strong> {{ $task->phone }}</p>
            <p class="card-text"><strong>Mail:</strong> {{ $task->mail }}</p>
            <p class="card-text"><strong>Division:</strong> {{ $task->division }}</p>
            <p class="card-text"><strong>Work:</strong> {{ $task->work }}</p>
            <p class="card-text"><strong>Due Date:</strong> {{ $task->dueDate }}</p>
            <a href="{{ route("editpage",$task->id) }}" class="btn btn-success">Update</a>
            <a href="{{ route("deletepage",$task->id) }}" class="btn btn-danger">Delete</a>
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
