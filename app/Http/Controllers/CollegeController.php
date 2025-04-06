<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // Show form to create a new college
    public function create()
    {
        return view('colleges.create');
    }

    // Store a new college in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name',
            'address' => 'required',
        ]);

        College::create($request->all());

        return redirect()->route('colleges.index')->with('success', 'College added!');
    }

    // Show form to edit an existing college
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    // Update an existing college in the database
    public function update(Request $request, College $college)
    {
        $request->validate([
            'name' => 'required|unique:colleges,name,' . $college->id,
            'address' => 'required',
        ]);

        $college->update($request->all());

        return redirect()->route('colleges.index')->with('success', 'College updated!');
    }
}
