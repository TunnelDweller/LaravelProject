<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

// Colleges
Route::resource('colleges', CollegeController::class);

// Students
Route::resource('students', StudentController::class);

// Home route
Route::get('/', [StudentController::class, 'index']);

// Additional route for college creation form
Route::get('colleges/create', [CollegeController::class, 'create'])->name('colleges.create');

// Route to store the new college
Route::post('colleges', [CollegeController::class, 'store'])->name('colleges.store');
