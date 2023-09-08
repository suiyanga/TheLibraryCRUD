
@extends('libraries.layout')

@section('title', 'LIBRARY DETAILS')

@section('content')
    <h1>LIBRARY DETAILS</h1>
    <p>Reader: {{ $library->Reader }}</p>
    <p>Book Name: {{ $library->Bookname }}</p>
    <p>Book No: {{ $library->Book_no }}</p>
    <p>Days Allowed: {{ $library->Days_allowed }}</p>
    
@endsection