@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>
<<<<<<< HEAD
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" required>
        </div>

        <div class="mb-3">
            <label for="college_id" class="form-label">College</label>
            <select name="college_id" class="form-select" required>
                @foreach($colleges as $college)
                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
=======

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
>>>>>>> partial_views
</div>
@endsection
