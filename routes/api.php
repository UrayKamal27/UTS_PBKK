<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseLecturersController;
use App\Http\Controllers\UserController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    //Akun
    // Route::controller(UserController::class)->group(function(){
    //     Route::get('/user', 'index');
    //     Route::post('/user/store', 'store');
    //     Route::patch('/user/{id}/update', 'update');
    //     Route::get('/user/{id}','show');
    //     Route::delete('/user/{id}', 'destroy');
    // });

    Route::apiResource('user', UserController::class);
    Route::apiResource('student', StudentsController::class);
    Route::apiResource('courses', CoursesController::class);
    Route::apiResource('lecturers', LecturersController::class);
    Route::apiResource('enrollment', EnrollmentController::class);
    Route::apiResource('courselecturers', CourseLecturersController ::class);
   
});