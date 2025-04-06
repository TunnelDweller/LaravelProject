<!-- resources/views/colleges/create.blade.php -->

@extends('layouts.master')

@section('content')
    <h2>Add College</h2>

    <!-- Form to add a new college -->
    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf <!-- CSRF token for security -->

        <!-- College Name input -->
        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <!-- College Address input -->
        <div class="mb-3">
            <label for="address" class="form-label">College Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
