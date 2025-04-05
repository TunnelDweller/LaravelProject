<!-- resources/views/colleges/form.blade.php -->
@extends('layouts.master')

@section('content')
    <h2>{{ isset($college) ? 'Edit' : 'Create' }} College</h2>
    <form method="POST" action="{{ isset($college) ? route('colleges.update', $college) : route('colleges.store') }}">
        @csrf
        @if(isset($college))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">College Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $college->name ?? '') }}">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
