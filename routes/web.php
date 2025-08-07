<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/agendar/{username}', [BookingController::class, 'form']);
Route::post('/agendar/{username}', [BookingController::class, 'submit']);

Route::middleware(['auth'])->group(function () {
    Route::get('/cursos', [CourseController::class, 'index']);
    Route::get('/cursos/{course}', [CourseController::class, 'show']);
    Route::post('/cursos/{course}/inscrever', [CourseController::class, 'enroll']);
});
