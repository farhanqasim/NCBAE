<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\EventController;




Route::get('dashboard', [DashboardController::class,"admin_dashboard"])->name('admin_home');
Route::get('add-student', [StudentController::class,"add_student"])->name('add-student');
Route::post('submit-student', [StudentController::class,"addStudents"])->name('submit-student');
Route::get('all-students', [StudentController::class,"view_student"])->name('view-student');
Route::get('student-delete/{user}', [StudentController::class, 'student_delete'])->name('student-delete');
Route::get('edit-student/{user}',[StudentController::class,'edit_student'])->name('edit-student');
Route::post('update-student/{user}', [StudentController::class,"update_student"])->name('update-student');
Route::get('view-studentinfo/{user}',[StudentController::class,'view_studentinfo'])->name('view-studentinfo');
Route::get('alumni-students', [StudentController::class,"alumni_student"])->name('alumni-students');
Route::get('add-events', [EventController::class,"add_events"])->name('add-events');
Route::post('submit-events', [EventController::class,"addevents"])->name('submit-events');
Route::get('view-events', [EventController::class,"view_events"])->name('view-events');
Route::get('event-delete/{event}', [EventController::class, 'event_delete'])->name('event-delete');

Route::get('edit-event/{event}',[EventController::class,'edit_event'])->name('edit-event');
Route::post('update-event/{event}',[EventController::class,'update_event'])->name('update-event');