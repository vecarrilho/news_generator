<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('category', CategoryController::class);
Route::resource('report', ReportController::class);
Route::get('/list/report', [ReportController::class, 'list'])->name('report.list');
Route::post('/list/report', [ReportController::class, 'search'])->name('report.search');