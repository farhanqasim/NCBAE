<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Post\PostController;





Route::get('dashboard', [StudentController::class,"student_dashboard"])->name('student_home');
Route::get('add-post', [PostController::class,"add_post"])->name('add-post');
Route::post('submit-post', [PostController::class,"submit_post"])->name('submit-post');
Route::get('view-posts', [PostController::class,"view_posts"])->name('view-posts');
Route::get('post-delete/{post}', [PostController::class, 'post_delete'])->name('post-delete');

Route::get('edit-post/{post}',[PostController::class,'edit_post'])->name('edit-post');
Route::post('update-post/{post}',[PostController::class,'update_post'])->name('update-post');

Route::get('cv-posts', [PostController::class,"cv_posts"])->name('cv-posts');
Route::get('cv-delete/{applyPost}', [PostController::class, 'cv_delete'])->name('cv-delete');