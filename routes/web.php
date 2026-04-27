<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('create', [\App\Http\Controllers\StudentController::class, 'creates'])->name('create');
    Route::get('edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
    Route::get('delete', [\App\Http\Controllers\StudentController::class, 'delete'])->name('delete');

    Route::get('student_mng', [\App\Http\Controllers\StudentController::class, 'stud'])->name('students.stud');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

// student.blade.php
