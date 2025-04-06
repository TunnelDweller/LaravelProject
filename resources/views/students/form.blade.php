<!-- resources/views/students/form.blade.php -->
@extends('layouts.master')

@section('content')
    <h2>{{ isset($student) ? 'Edit' : 'Create' }} Student</h2>
    <form method="POST" action="{{ isset($student) ? route('students.update', $student) : route('students.store') }}">
        @csrf
        @if(isset($student))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $student->name ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="college_id" class="form-label">College</label>
            <select name="college_id" class="form-select">
                @foreach($colleges as $college)
                    <option value="{{ $college->id }}" {{ (isset($student) && $student->college_id == $college->id) ? 'selected' : '' }}>
                        {{ $college->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $student->email ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $student->phone ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" value="{{ old('dob', $student->dob ?? '') }}">
        </div>


        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
