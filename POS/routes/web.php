<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
Route::get('/category/beauty-health', [SaleController::class, 'beautyHealth']);
Route::get('/category/home-care', [SaleController::class, 'homeCare']);
Route::get('/category/baby-kid', [SaleController::class, 'babyKid']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);
Route::get('/sales', [SaleController::class, 'index']);
