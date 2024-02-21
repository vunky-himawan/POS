<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Products
Route::prefix("/category")->group(function () {
    Route::get("/food-beverage", [ProductController::class, 'show']);
    Route::get("/beauty-health", [ProductController::class, 'show']);
    Route::get("/home-care", [ProductController::class, 'show']);
    Route::get("/baby-kid", [ProductController::class, 'show']);
});

// User
Route::get("/user/{id}/name/{name}", [UserController::class, 'show']);

// Transaction
Route::get('/transaction', [SalesController::class, 'transaction']);
