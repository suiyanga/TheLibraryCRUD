@extends('libraries.layout')

@section('title', 'ADD NEW BOOK / READER')

@section('content')
    <h1>ADD NEW BOOK / READER</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('libraries.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Reader">Reader:</label>
            <input type="text" class="form-control" id="Reader" name="Reader" required>
        </div>
        <div class="form-group">
            <label for="Bookname">Book Name:</label>
            <input type="text" class="form-control" id="Bookname" name="Bookname" required>
        </div>
        <div class="form-group">
            <label for="Book_no">Book Number:</label>
            <input type="text" class="form-control" id="Book_no" name="Book_no" required>
        </div>
        <div class="form-group">
            <label for="Days_allowed">Days Allowed:</label>
            <input type="number" class="form-control" id="Days_allowed" name="Days_allowed" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush