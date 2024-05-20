@extends('layouts.main')

@section('title', 'Messages')

@push('head')
<style>
    .table-custom {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    .table-custom th, .table-custom td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table-custom th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #007bff;
        color: white;
    }
</style>
@endpush

@section('main-section')
<div class="container my-5">
    <h1 class="mb-4 text-center">Messages</h1>

    @if (count($messages) > 0)
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message['name'] }}</td>
                        <td>{{ $message['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning text-center" role="alert">
            No messages found.
        </div>
    @endif
</div>
@endsection
