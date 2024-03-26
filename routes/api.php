<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/{id}', [AdminController::class, 'show']);
Route::post('admin', [AdminController::class, 'store']);
Route::patch('admin/{id}', [AdminController::class, 'update']);
Route::delete('admin/{id}', [AdminController::class, 'destroy']);

Route::get('bookmark', [BookmarkController::class, 'index']);
Route::get('bookmark/{id}', [BookmarkController::class, 'show']);
Route::post('bookmark', [BookmarkController::class, 'store']);
Route::patch('bookmark/{id}', [BookmarkController::class, 'update']);
Route::delete('bookmark/{id}', [BookmarkController::class, 'destroy']);

Route::get('college', [CollegeController::class, 'index']);
Route::get('college/{id}', [CollegeController::class, 'show']);
Route::post('college', [CollegeController::class, 'store']);
Route::patch('college/{id}', [CollegeController::class, 'update']);
Route::delete('college/{id}', [CollegeController::class, 'destroy']);

Route::get('comment', [CommentController::class, 'index']);
Route::get('comment/{id}', [CommentController::class, 'show']);
Route::post('comment', [CommentController::class, 'store']);
Route::patch('comment/{id}', [CommentController::class, 'update']);
Route::delete('comment/{id}', [CommentController::class, 'destroy']);

Route::get('profile', [ProfileController::class, 'index']);
Route::get('profile/{id}', [ProfileController::class, 'show']);
Route::post('profile', [ProfileController::class, 'store']);
Route::patch('profile/{id}', [ProfileController::class, 'update']);
Route::delete('profile/{id}', [ProfileController::class, 'destroy']);

Route::get('reply', [ReplyController::class, 'index']);
Route::get('reply/{id}', [ReplyController::class, 'show']);
Route::post('reply', [ReplyController::class, 'store']);
Route::patch('reply/{id}', [ReplyController::class, 'update']);
Route::delete('reply/{id}', [ReplyController::class, 'destroy']);

Route::get('report', [ReportController::class, 'index']);
Route::get('report/{id}', [ReportController::class, 'show']);
Route::post('report', [ReportController::class, 'store']);
Route::patch('report/{id}', [ReportController::class, 'update']);
Route::delete('report/{id}', [ReportController::class, 'destroy']);

Route::get('review', [ReviewController::class, 'index']);
Route::get('review/{id}', [ReviewController::class, 'show']);
Route::post('review', [ReviewController::class, 'store']);
Route::patch('review/{id}', [ReviewController::class, 'update']);
Route::delete('review/{id}', [ReviewController::class, 'destroy']);

Route::get('student', [StudentController::class, 'index']);
Route::get('student/{id}', [StudentController::class, 'show']);
Route::post('student', [StudentController::class, 'store']);
Route::patch('student/{id}', [StudentController::class, 'update']);
Route::delete('student/{id}', [StudentController::class, 'destroy']);

Route::get('subscription', [SubscriptionController::class, 'index']);
Route::get('subscription/{id}', [SubscriptionController::class, 'show']);
Route::post('subscription', [SubscriptionController::class, 'store']);
Route::patch('subscription/{id}', [SubscriptionController::class, 'update']);
Route::delete('subscription/{id}', [SubscriptionController::class, 'destroy']);

Route::get('teacher', [TeacherController::class, 'index']);
Route::get('teacher/{id}', [TeacherController::class, 'show']);
Route::post('teacher', [TeacherController::class, 'store']);
Route::patch('teacher/{id}', [TeacherController::class, 'update']);
Route::delete('teacher/{id}', [TeacherController::class, 'destroy']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::post('user', [UserController::class, 'store']);
Route::patch('user/{id}', [UserController::class, 'update']);
Route::delete('user/{id}', [UserController::class, 'destroy']);
