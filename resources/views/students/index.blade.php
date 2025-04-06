<!-- resources/views/students/index.blade.php -->
@extends('layouts.master')

@section('content')
    <h2>Students</h2>

    <!-- Filter dropdown view to filter students by college -->
    @include('partials.filter')

    <!-- Buttons to add a new student or a new college -->
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>
    <a href="{{ route('colleges.create') }}" class="btn btn-secondary mb-3">Add College</a>

    <!-- Students Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>          <!-- Student name -->
                <th>College</th>       <!-- College name associated with the student -->
                <th>Actions</th>       <!-- View, edit, delete -->
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <!-- Display student name -->
                    <td>{{ $student->name }}</td>

                    <!-- Display associated college name -->
                    <td>{{ $student->college->name }}</td>

                    <!-- Action buttons -->
                    <td>
                        <!-- View button -->
                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">View</a>

                        <!-- Edit button -->
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete form -->
                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
