@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>

    {{-- show validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('students.form')
</div>
@endsection
