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

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
