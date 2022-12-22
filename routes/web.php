<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\AddCourseController;

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



//Route::get('/dashboard', function () {
//    return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/',[WellcomeController::class,'index'])->name('home');
    Route::get('/add/detail/{id}',[WellcomeController::class,'detail'])->name('course.detail');


    Route::get('/add/course',[AddCourseController::class,'index'])->name('course.add');
    Route::post('/add/store',[AddCourseController::class,'store'])->name('course.store');
    Route::get('/add/manage',[AddCourseController::class,'manage'])->name('course.manage');
    Route::get('/add/edit/{id}',[AddCourseController::class,'edit'])->name('course.edit');
    Route::post('/add/update/{id}',[AddCourseController::class,'update'])->name('course.update');
    Route::get('/add/delete/{id}',[AddCourseController::class,'delete'])->name('course.delete');

    Route::get('/course', [wellcomeController::class,'course'])->name('course');
    Route::get('/blog-detail/{id}', [wellcomeController::class,'detail'])->name('blog-detail');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-teacher',[AdminController::class,'addTeacher'])->name('add-teacher');
    Route::get('/manage-teacher',[AdminController::class,'manageTeacher'])->name('manage-teacher');
    Route::post('/teacher-store',[TeacherController::class,'store'])->name('teacher-store');
    Route::get('/teacher-edit/{id}',[TeacherController::class,'edit'])->name('teacher-edit');
    Route::patch('/teacher-update/{id}',[TeacherController::class,'update'])->name('teacher-update');
    Route::get('/teacher-delete/{id}',[TeacherController::class,'delete'])->name('teacher-delete');
});

require __DIR__.'/auth.php';
