<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show list of students with optional filters and sorting
    public function index(Request $request)
    {
        $colleges = College::all(); // College filter dropdown
        $students = Student::query(); 

        // Filter students by selected college (if any)
        if ($request->has('college_id') && $request->college_id != '') {
            $students->where('college_id', $request->college_id);
        }


        // Return the student index view with the data
        return view('students.index', [
            'students' => $students->get(),
            'colleges' => $colleges,
        ]);
    }

    // Show form to create a new student
    public function create()
    {
        $colleges = College::all(); // Get colleges for the select dropdown
        return view('students.create', compact('colleges'));
    }

    // Handle form submission to store a new student
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{8}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        // Create the student
        Student::create($request->all());

        // Redirect back to list with a success message
        // Does not work
        return redirect()->route('students.index')->with('success', 'Student added!');
    }

    // Show a single student's details
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show form to edit an existing student
    public function edit(Student $student)
    {
        $colleges = College::all(); // For the dropdown
        return view('students.edit', compact('student', 'colleges'));
    }

    // Handle the update of a student
    public function update(Request $request, Student $student)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{8}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        // Update the student record
        $student->update($request->all());

        // Redirect with a success message
        // Does not work
        return redirect()->route('students.index')->with('success', 'Student updated!');
    }

    // Delete a student record
    public function destroy(Student $student)
    {
        $student->delete(); // Remove from database

        //Shows a message confirming that student was deleted.
        // Does not work
        return redirect()->route('students.index')->with('success', 'Student deleted!'); 
    }
}
