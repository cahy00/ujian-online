<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\StudentController;
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

Route::prefix('admin')->group(function(){
	//route dashboard
	Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('admin.dashboard');
	//route lesson
	Route::get('/lesson', [LessonController::class, 'index'])->name('lesson.index');
	Route::get('/lesson/create', [LessonController::class, 'create']);
	Route::post('/lesson/create', [LessonController::class, 'store'])->name('lesson.create');
	Route::get('/lesson/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
	Route::put('/lesson/update/{id}', [LessonController::class, 'update'])->name('lesson.update');
	Route::get('/lesson/delete/{id}', [LessonController::class, 'destroy'])->name('lesson.delete');
	//route classroom
	Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
	Route::get('/classroom/create', [ClassroomController::class, 'create'])->name('classroom.create');
	Route::post('/classroom/create', [ClassroomController::class, 'store'])->name('classroom.store');
	Route::get('/classroom/edit/{id}', [ClassroomController::class, 'edit'])->name('classroom.edit');
	Route::put('/classroom/update/{id}', [ClassroomController::class, 'update'])->name('classroom.update');
	Route::put('/classroom/update/{id}', [ClassroomController::class, 'update'])->name('classroom.update');
	Route::get('/classroom/delete/{id}', [ClassroomController::class, 'destroy'])->name('classroom.delete');
	//route student
	Route::get('/student', [StudentController::class, 'index'])->name('student.index');
	Route::get('/student/create/', [StudentController::class, 'create'])->name('student.create');
	Route::post('/student/create/', [StudentController::class, 'store'])->name('student.store');
	Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
	Route::get('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
	Route::get('/student/import/', [StudentController::class, 'import'])->name('student.import');



});
