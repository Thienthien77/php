<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestMiddleWare;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [UserController::class, 'login']);
    Route::post('register', [UserController::class, 'register']);
});

Route::prefix('tables')->group(function () {
    Route::get('/', [TableController::class, 'getTables'])->middleware(['auth:api', TestMiddleWare::class]);
    Route::put('/{id}', [TableController::class, 'update']);
});

Route::get('/foods', [FoodController::class, 'getFoods']);

Route::prefix('orders')->group(function () {
    Route::delete('/{id}' , [OrderController::class, 'delete']);
    Route::get('/', [OrderController::class, 'getOrders']);
    Route::put('/{id}', [OrderController::class, 'update']);
    Route::post('/', [OrderController::class, 'create']);
});

Route::prefix('bills')->group(function () {
    Route::get('/', [BillController::class, 'getBills']);
    Route::post('/', [BillController::class, 'create']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/revenue', [OrderController::class, 'getRevenue']);
});

