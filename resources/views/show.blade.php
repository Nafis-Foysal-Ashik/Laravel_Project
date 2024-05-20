@extends('layouts.main')

@section('title', 'Task Management System')

@section('main-section')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold">All Tasks</h2>
        <a href="{{ route('loginpage') }}" class="btn btn-primary">Log In</a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($tasks as $task)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('uploads/'.$task->picture) }}" class="card-img-top rounded-circle p-3 mx-auto d-block" alt="Task Picture" style="width: 150px; height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $task->name }}</h5>
                    <p class="card-text"><strong>Phone:</strong> {{ $task->phone }}</p>
                    <p class="card-text"><strong>E-Mail:</strong> {{ $task->mail }}</p>
                    <p class="card-text"><strong>Division:</strong> {{ $task->division }}</p>
                    <p class="card-text"><strong>Work:</strong> {{ $task->work }}</p>
                    <p class="card-text"><strong>Dead-Line:</strong> {{ $task->dueDate }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
@endsection
