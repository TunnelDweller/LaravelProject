@extends('layouts.master')

@section('content')
    <h2>Student Details</h2>
    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $student->phone }}</li>
        <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->dob }}</li>
        <li class="list-group-item"><strong>College:</strong> {{ $student->college->name }}</li>
    </ul>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
