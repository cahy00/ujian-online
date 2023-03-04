<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ExamController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LogoutController::class, 'logout']);

Route::middleware('auth')->group(function(){
	//route dashboard
	Route::get('/', [DashboardController::class, '__invoke'])->name('admin.dashboard');
	Route::prefix('admin')->group(function(){
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
	Route::get('/classroom/delete/{id}', [ClassroomController::class, 'destroy'])->name('classroom.delete');
	//route student
	Route::get('/student', [StudentController::class, 'index'])->name('student.index');
	Route::get('/student/create/', [StudentController::class, 'create'])->name('student.create');
	Route::post('/student/create/', [StudentController::class, 'store'])->name('student.store');
	Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
	Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
	Route::get('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
	Route::get('/student/import/', [StudentController::class, 'import'])->name('student.import');
	Route::post('/student/import/', [StudentController::class, 'storeImport'])->name('student.storeimport');
	//route exam
	Route::get('/exam', [ExamController::class, 'index'])->name('exam');
	Route::get('/exam/create', [ExamController::class, 'create'])->name('exam.create');
	Route::post('/exam/store', [ExamController::class, 'store'])->name('exam.store');
	Route::get('/exam/show/{id}', [ExamController::class, 'show'])->name('exam.show');
	});
});

