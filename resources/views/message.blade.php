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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $index => $message)
                    <tr>
                        <td>{{ $message['name'] }}</td>
                        <td>{{ $message['email'] }}</td>
                        <td>
                            <form class="delete-message-form" method="POST" action="{{ route('deleteMessage') }}">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-message-form').on('submit', function(e) {
            e.preventDefault();

            var $form = $(this);
            var formData = $form.serialize();

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $form.closest('tr').remove();
                        if ($('.table-custom tbody tr').length === 0) {
                            $('.table-custom').after('<div class="alert alert-warning text-center" role="alert">No messages found.</div>');
                        }
                    } else {
                        alert('Failed to delete the message.');
                    }
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>
@endpush
@endsection
