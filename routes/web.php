<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

// Colleges
Route::resource('colleges', CollegeController::class);

// Students
Route::resource('students', StudentController::class);

Route::get('/', [StudentController::class, 'index']);
