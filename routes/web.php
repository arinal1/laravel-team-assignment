<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GradingController;

Route::get('/', [Controller::class, 'index']);
Route::get('/grading', [GradingController::class, 'index']);
Route::post('/grading', [GradingController::class, 'doGrading']);
