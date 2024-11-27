<?php

use App\Http\Controllers\Api\EmploymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/employments', [EmploymentController::class, 'index'])->name('apihome');
Route::post('/employments', [EmploymentController::class, 'store'])->name('apistore');
Route::put('/employments/{id}', [EmploymentController::class, 'update'])->name('apiupdate');
Route::delete('/employments/{id}', [EmploymentController::class, 'destroy'])->name('apidestroy');
Route::get('/employments/{id}', [EmploymentController::class, 'show'])->name('apishow');