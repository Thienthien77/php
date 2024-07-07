<?php

use App\Models\Bill;
use App\Models\Food;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    dd('ok');
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('tables')->group(function () {

    Route::get('/', function () {
        $tables = Table::all();

        return response()->json($tables);
    });

    Route::put('/{id}', function (Request $request, $id) {
        $table = Table::find($request->id) ;
        $table->customer_name = $request->customerName;
        $table->quantity = $request->quantity;
        $table->status = $request->status;

        $table->save();

        return response()->json([
            "status" => "success",
            "data" => $table
        ]);
    });
});


Route::get('/foods', function () {
    $foods = Food::all();

    return response()->json($foods);
});

Route::prefix('orders')->group(function () {

    Route::delete('/{id}' , function ($id) {
        $order = Order::where('id_table' ,$id);
        $order->delete();

        return response()->json('delete successful');
    });

    Route::get('/', function () {
        $idOrders = Order::select('id_table')->distinct()->pluck('id_table');


        $result = [];

        foreach ($idOrders as $id) {
            $orders = Order::where('id_table', $id)->get();
            $data = [
                "id" => $id,
                "items" => $orders
            ];

            array_push($result, $data);
        }

        return response()->json($result);
    });

    Route::put('/{id}', function (Request $request, $id) {

        $items = $request->items;

        // dd($items);

        foreach ($items as $item) {
            // dd($item["id_table"]);
            Order::create([
                "id_table" => $id,
                "id_food" => $item["id_food"] ?? $item['idFood'],
                "quantity" => $item["quantity"],
            ]);
        }

        return response()->json([
            "success" => true,
        ]);
    });
    Route::post('/', function (Request $request) {

        $items = $request->items;
        $id = $request->id;

        // dd($items);

        foreach ($items as $item) {
            // dd($item["id_table"]);
            Order::create([
                "id_table" => $id,
                "id_food" => $item["id_food"] ?? $item['idFood'],
                "quantity" => $item["quantity"],
            ]);
        }

        return response()->json([
            "success" => true,
        ]);
    });
});

Route::prefix('bills')->group(function () {
    Route::get('/', function() {
        $bills = Bill::all();

        return response()->json($bills);
    });

    Route::post('/', function(Request $request) {
        $bills = Bill::create([
            'id_table' => $request->id_table ?? $request->idTable,
            'total_amount' => $request->total_amount ?? $request->totalAmount,
            'time' => $request->time,

        ]);

        return response()->json($bills);
    });
});

