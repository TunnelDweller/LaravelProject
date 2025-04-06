@extends('layouts.master')

@section('content')
    <h2>Add College</h2>
    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
