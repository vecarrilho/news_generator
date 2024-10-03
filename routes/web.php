<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index'); 
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create'); 
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/show', [CategoryController::class, 'show'])->name('category.show'); 
    Route::get('/edit', [CategoryController::class, 'edit'])->name('category.edit'); 
    Route::get('/update', [CategoryController::class, 'update'])->name('category.update'); 
    Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});