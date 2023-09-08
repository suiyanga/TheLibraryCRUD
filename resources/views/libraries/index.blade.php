@extends('libraries.layout')

@section('content')
<div class="container">
    <h1></h1>
    <a href="{{ route('libraries.create') }}" class="btn btn-add-book mb-3">Add New Book</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reader</th>
                <th>Book Name</th>
                <th>Book No</th>
                <th>Days Allowed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($libraries as $library)
            <tr>
                <td>{{ $library->id }}</td>
                <td>{{ $library->Reader }}</td>
                <td>{{ $library->Bookname }}</td>
                <td>{{ $library->Book_no }}</td>
                <td>{{ $library->Days_allowed }}</td>
                <td>
                    <a href="{{ route('libraries.show', $library) }}" class="btn btn-view btn-sm">View</a>
                    <a href="{{ route('libraries.edit', $library) }}" class="btn btn-edit btn-sm">Edit</a>
                    <form action="{{ route('libraries.destroy', $library) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No books in the library.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush