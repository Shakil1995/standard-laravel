<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\studentController;
use App\Http\Controllers\studentController;



// Route::get('/', function () {
//     return view('layouts.admin');
// });

Route::get('/', [studentController::class, 'home']);

 Route::get('/student', [studentController::class, 'index']);
 Route::post('/student/store',[StudentController::class, 'store'])->name('student.store');
 Route::get('/student/delete/{id}',[StudentController::class, 'destroy'])->name('student.delete');

