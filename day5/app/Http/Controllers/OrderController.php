<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function delete($id) {
        $order = Order::where('id_table' ,$id);
        $order->delete();

        return response()->json('delete successful');
    }

    public function getOrders() {
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
    }

    public function update(Request $request, $id) {
        $items = $request->items;
        foreach ($items as $item) {
            Order::create([
                "id_table" => $id,
                "id_food" => $item["id_food"] ?? $item['idFood'],
                "quantity" => $item["quantity"],
            ]);
        }
        return response()->json([
            "success" => true,
        ]);
    }

    public function create(Request $request) {

        $items = $request->items;
        $id = $request->id;

        foreach ($items as $item) {
            Order::create([
                "id_table" => $id,
                "id_food" => $item["id_food"] ?? $item['idFood'],
                "quantity" => $item["quantity"],
            ]);
        }

        return response()->json([
            "success" => true,
        ]);
    }
}
