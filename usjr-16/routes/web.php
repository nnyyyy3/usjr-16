<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsjrController;

Route::get('/show/students/all', [UsjrController::class, 'showAllStudents']);
Route::get('/show/student/{id}', [UsjrController::class, 'showStudent']);
Route::get('/show/colleges', [UsjrController::class, 'showAllColleges']);
Route::get('/show/college/{id}', [UsjrController::class, 'showCollege']);
Route::get('/show/departments', [UsjrController::class, 'showAllDepartments']);
