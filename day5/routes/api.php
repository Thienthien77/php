<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [UserController::class, 'login']);
    Route::post('register', [UserController::class, 'register']);
});

Route::prefix('tables')->group(function () {
    Route::get('/', [TableController::class, 'getTables']);
    Route::delete('/{tableId}', [TableController::class, 'deleteTables']);
    Route::put('/{id}', [TableController::class, 'update']);
    Route::post('/', [TableController::class, 'create']);
});
Route::prefix('foods')->group(function () {
    Route::get('/', [FoodController::class, 'getFoods']);
    Route::delete('/{id}', [FoodController::class, 'deleteFoods']);
    Route::put('/{id}', [FoodController::class, 'update']);
    Route::post('/', [FoodController::class, 'create']);
});

Route::prefix('orders')->middleware('auth:api')->group(function () {
    Route::delete('/{id}' , [OrderController::class, 'delete']);
    Route::get('/', [OrderController::class, 'getOrders']);
    Route::put('/{id}', [OrderController::class, 'update']);
    Route::post('/', [OrderController::class, 'create']);
});

Route::prefix('bills')->group(function () {
    Route::get('/', [BillController::class, 'getBills']);
    Route::post('/', [BillController::class, 'create']);
});

