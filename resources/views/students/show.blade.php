@extends('layouts.master')

@section('content')
    <!-- Heading for the student details page -->
    <h2>Student Details</h2>

    <!-- List group to display student details -->
    <ul class="list-group mb-3">
        <!-- Student Name -->
        <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>

        <!-- Student Email -->
        <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>

        <!-- Student Phone -->
        <li class="list-group-item"><strong>Phone:</strong> {{ $student->phone }}</li>

        <!-- Student Date of Birth -->
        <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->dob }}</li>

        <!-- Student's associated College -->
        <li class="list-group-item"><strong>College:</strong> {{ $student->college->name }}</li>
    </ul>

    <!-- Button to return to the students index page -->
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
