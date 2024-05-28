@extends('layouts.main')

@section('title', 'Task Management System')

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Showing Khulna Tasks</div>
        {{-- <a href="{{ route('createpage') }}" class="btn btn-primary">Add Task</a> --}}
    </div>
</div>

<div class="p-5">

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>E-Mail</th>
            <th>Work</th>
            <th>Dead-Line</th>
            <th>Picture</th>
        </tr>
    </thead>

    <tbody>
    @if(count($tasks) > 0)
        <ul>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->phone }}</td>
                <td >{{ $task->mail }}</td>
                <td>{{ $task->work }}</td>
                <td>{{ $task->dueDate }}</td>
                <td><img src="{{ asset('uploads/'.$task->picture) }}" width="100px" alt=""></td>
            </tr>
             @endforeach
        </ul>
    @else
        <p>No tasks found in Khulna division.</p>
    @endif
    </tbody>
</table>
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
