<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\studentController;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.admin');
});



 Route::get('/student', [studentController::class, 'index']);
 Route::post('/student/store',[StudentController::class, 'store'])->name('student.store');
 Route::get('/student/delete/{id}',[StudentController::class, 'destroy'])->name('student.delete');

