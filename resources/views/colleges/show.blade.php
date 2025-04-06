<!-- resources/views/colleges/show.blade.php -->

@extends('layouts.master')

@section('content')
    <h2>{{ $college->name }}</h2>
    <p><strong>Address:</strong> {{ $college->address }}</p>
    <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
