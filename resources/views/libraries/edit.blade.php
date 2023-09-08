@extends('libraries.layout')

@section('title', 'EDIT LIBRARY')

@section('content')
    <h1>EDIT LIBRARY</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('libraries.update', $library) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Reader">Reader:</label>
            <input type="text" class="form-control" id="Reader" name="Reader" value="{{ $library->Reader }}" required>
        </div>
        <div class="form-group">
            <label for="Bookname">Book Name:</label>
            <input type="text" class="form-control" id="Bookname" name="Bookname" value="{{ $library->Bookname }}" required>
        </div>
        <div class="form-group">
            <label for="Book_no">Book No:</label>
            <input type="text" class="form-control" id="Book_no" name="Book_no" value="{{ $library->Book_no }}" required>
        </div>
        <div class="form-group">
            <label for="Days_allowed">Days Allowed:</label>
            <input type="number" class="form-control" id="Days_allowed" name="Days_allowed" value="{{ $library->Days_allowed }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush