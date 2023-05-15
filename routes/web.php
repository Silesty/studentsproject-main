<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', ['App\Http\Controllers\HomeController'::class, 'index'])->name('home');
Route::middleware(['auth', 'role:chairman'])->prefix('/students')->group(function () {
    Route::get('/', ['App\Http\Controllers\StudentController'::class, 'index'])->name('Students');
    Route::get('/enrolments', ['App\Http\Controllers\StudentController'::class, 'enrolments'])->name('StudentsEnrolments');
    Route::get('/punishments', ['App\Http\Controllers\StudentController'::class, 'punisments'])->name('StudentsPunishments');
});
Route::middleware(['auth'])->prefix('/stage_courses/{stage_id}')->group(function () {
    Route::get('/', ['App\Http\Controllers\StagesController'::class, 'index'])->name('stage_courses');
});
Route::middleware(['auth'])->prefix('/exams/{stage_id}')->group(function () {
    Route::get('/', ['App\Http\Controllers\StagesController'::class, 'exams'])->name('exams');
});
