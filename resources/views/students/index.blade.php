<!-- resources/views/students/index.blade.php -->
@extends('layouts.master')

@section('content')
    <h2>Students</h2>
    @include('partials.filter')

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>
    <a href="{{ route('colleges.create') }}" class="btn btn-secondary mb-3">Add College</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>College</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->college->name }}</td>
                    <td>
                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>
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
