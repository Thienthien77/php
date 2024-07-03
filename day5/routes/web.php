<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        "status" => "ok",
        "status1" => "ok",
        "status12" => "ok",
    ]);
});

Route::get('/greeting', function () {
    $a = 2;
    $b = 3;
    return $a + $b;
});

Route::get('/users', function (Request $request) {
    // ...
});

Route::get('/user', [UserController::class, 'index']);

// all method
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// list routes
// php artisan route:list

// route parameters
// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });

// Route::get('/user/{id}', function (Request $request, string $id) {
//     return 'User '.$id;
// });
Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    // ...
});


// optional parameters
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/profile', function () {
    dd('ok');
})->name('profile');

//route group

Route::prefix('admin')->group(function () {
    Route::get('/1', function() {
       dd(1);
    });
    Route::get('/2', function() {
       dd(2);
    });
});

Route::controller(UserController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});
