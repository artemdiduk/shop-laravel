<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [MainController::class, 'index'])->name('index');
Route::get("/categories", [MainController::class, 'categories'])->name('categories');
Route::get("/basket", [MainController::class, 'basket'])->name('basket');
Route::get("/{category}", [MainController::class, 'category'])->name('category');
Route::get("/{category:code}/{product:code}", [MainController::class, 'product'])->name('product');