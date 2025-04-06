<!-- resources/views/colleges/show.blade.php -->

@extends('layouts.master')

@section('content')
    <!-- Display college details -->
    <h2>{{ $college->name }}</h2>
    <p><strong>Address:</strong> {{ $college->address }}</p>

    <!-- Back button -->
    <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back</a>
@endsection
