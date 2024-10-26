<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

Route::get('/', [ExamController::class, 'index'])->name('welcome');