<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'index'])->name('index');
Route::post('/add-product',[ProductController::class,'addProduct'])->name('add.product');
Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
Route::post('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete.product');




