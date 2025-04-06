<!-- resources/views/colleges/index.blade.php -->

@extends('layouts.master')

@section('content')
    <h2>Colleges</h2>

    <!-- Buttons -->
    <div class="mb-3">
        <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add College</a>
        <a href="{{ route('students.create') }}" class="btn btn-secondary">Add Student</a>
    </div>

    <!-- Table listing all colleges -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
                <tr>
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                    <td>
                        <!-- View button -->
                        <a href="{{ route('colleges.show', $college) }}" class="btn btn-info btn-sm">View</a>
                        <!-- Edit button -->
                        <a href="{{ route('colleges.edit', $college) }}" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Delete form -->
                        <form action="{{ route('colleges.destroy', $college) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <!-- Delete button -->
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
