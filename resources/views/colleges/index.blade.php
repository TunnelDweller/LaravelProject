@extends('layouts.master')

@section('content')
    <h2>Colleges</h2>
    <a href="{{ route('colleges.create') }}" class="btn btn-primary mb-3">Add College</a>
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
                        <a href="{{ route('colleges.edit', $college) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('colleges.destroy', $college) }}" method="POST" style="display:inline;">
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
