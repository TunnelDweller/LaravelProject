@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>

    <!-- Display validation errors-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Student creation form-->
    <form action="{{ route('students.store') }}" method="POST">
        @csrf 

        <!-- Student name input -->
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>

        <!-- Email input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Phone input -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
        </div>

        <!-- Date of Birth input -->
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>
        </div>

        <!-- College dropdown -->
        <div class="mb-3">
            <label for="college_id" class="form-label">College</label>
            <select name="college_id" class="form-select" required>
                @foreach($colleges as $college)
                    <option value="{{ $college->id }}" {{ old('college_id') == $college->id ? 'selected' : '' }}>
                        {{ $college->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
