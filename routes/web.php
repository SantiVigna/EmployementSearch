<?php

use App\Http\Controllers\EmploymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmploymentController::class, 'index'])->name('home');
