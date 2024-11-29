<?php

use App\Http\Controllers\EmploymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmploymentController::class, 'index'])->name('home');
Route::get('employment/{id}', [EmploymentController::class, 'show'])->name('show');
