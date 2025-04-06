@extends('layouts.master')

@section('content')
    <h2>Edit Student</h2>

    @include('students.form', ['student' => $student, 'colleges' => $colleges])
@endsection
