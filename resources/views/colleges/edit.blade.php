<!-- resources/views/colleges/edit.blade.php -->

@extends('layouts.master')

@section('content')
    <h2>Edit College</h2>

    <form action="{{ route('colleges.update', $college) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $college->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">College Address</label>
            <input type="text" class="form-control" name="address" value="{{ old('address', $college->address) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
