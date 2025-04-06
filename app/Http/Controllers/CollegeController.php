<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // Show list of colleges
    public function index()
    {
        $colleges = College::all();  // Fetch all colleges
        return view('colleges.index', compact('colleges'));  // Pass colleges to the view
    }

    // Show form to create a new college
    public function create()
    {
        return view('colleges.create');  // Show create form
    }

    // Store a new college in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name',
            'address' => 'required',
        ]);

        College::create($request->all());  // Save the new college
        return redirect()->route('colleges.index')->with('success', 'College added!'); // Does not work should show college created message
    }

    // Show a single college's details
    public function show(College $college)
    {
        return view('colleges.show', compact('college'));
    }

    // Show form to edit an existing college
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    // Update an existing college
    public function update(Request $request, College $college)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name,' . $college->id,
            'address' => 'required',
        ]);

        $college->update($request->all());  // Update college details
        return redirect()->route('colleges.index')->with('success', 'College updated!'); // Does not work should show college updated message
    }

    // Delete a college
    public function destroy(College $college)
    {
        $college->delete();  // Delete college
        return redirect()->route('colleges.index')->with('success', 'College deleted!'); // Does not work should show college deletion message
    }
}
