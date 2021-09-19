<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//academic session routs
Route::get('/all-sessions', [App\Http\Controllers\AcademicSessionController::class, 'index'])->name('all-sessions');
Route::get('/new-session', [App\Http\Controllers\AcademicSessionController::class, 'create'])->name('new-session');
Route::post('/add-session', [App\Http\Controllers\AcademicSessionController::class, 'store'])->name('add-session');
Route::get('/edit-session/{id}', [App\Http\Controllers\AcademicSessionController::class, 'edit'])->name('edit-session');
Route::get('/view-session/{id}', [App\Http\Controllers\AcademicSessionController::class, 'show'])->name('view-session');
Route::put('/update-session/{id}', [App\Http\Controllers\AcademicSessionController::class, 'update'])->name('update-session');

//term semester routs
Route::get('/all-semesters', [App\Http\Controllers\TermSemesterController::class, 'index'])->name('all-semesters');
Route::get('/new-semester', [App\Http\Controllers\TermSemesterController::class, 'create'])->name('new-semester');
Route::post('/add-semester', [App\Http\Controllers\TermSemesterController::class, 'store'])->name('add-semester');

//student routs
Route::get('/all-students', [App\Http\Controllers\StudentController::class, 'index'])->name('all-students');
Route::get('/new-student', [App\Http\Controllers\StudentController::class, 'create'])->name('new-student');
Route::post('/add-student', [App\Http\Controllers\StudentController::class, 'index'])->name('add-student');
