@extends('layouts.main')
@section('title', 'Available Information')

@section('main-section')
    <h1>Available Information</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (count($availables) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Rating</th>
                    <th>Book Now</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($availables as $available)
                    <tr>
                        <td>{{ $available->fullname }}</td>
                        <td>{{ $available->email }}</td>
                        <td>{{ $available->phone }}</td>
                        <td>{{ $available->address }}</td>
                        <td>{{ $available->rating }}</td>
                        {{-- <td>
                            <form action="{{ route('book-now', $available->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No available information found.</p>
    @endif
@endsection
