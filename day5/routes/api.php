<?php

use App\Models\Food;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    dd('ok');
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/table', function () {
    $tables = Table::all();

    return response()->json($tables);
});

Route::get('/foods', function () {
    $foods = Food::all();

    return response()->json($foods);
});
Route::get('/orders', function () {

    /**
     * [
     *  id : order id
     * items [
     * Order::all()
     * ]
     * ]
     */
    $orders = Order::where('id_table', 1)->get();
    $result = [
        "id" => 1,
        "items" => $orders
    ];

    return response()->json([$result]);
});

Route::put('/orders/{id}', function (Request $request, $id) {

    $items = $request->items;

    foreach ($items as $item) {
        // dd($item["id_table"]);
        Order::create([
            "id_table" => 1,
            "id_food" => 2,
            "quantity" => 2,
        ]);
    }

    return response()->json('ok');
});
