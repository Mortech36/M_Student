<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [AdminController::class, 'index'])->middleware('auth')->name('home');
Route::get('/add_student_page', [AdminController::class, 'add_student_page']);
Route::post('/add_student', [AdminController::class, 'add_student'])->name('students.add')->middleware('auth');
Route::get('/show_students', [AdminController::class, 'show_students'])->name('students.show')->middleware('auth');
Route::get('/delete_student/{id}', [AdminController::class, 'delete_student'])->name('students.delete')->middleware('auth');
Route::get('/update_student_page/{id}', [AdminController::class, 'update_student_page'])->name('students.update.page')->middleware('auth');
Route::put('/update_student/{id}', [AdminController::class, 'update_student'])->name('students.update')->middleware('auth');

Route::get('/home', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
