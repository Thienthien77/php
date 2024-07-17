<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
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
            $orders = Order::where('id_table', $id)->with('food')->get();
            $data = [
                "id" => $id,
                "items" => $orders
            ];

            array_push($result, $data);
        }

        return response()->json($result);
    }

    public function update(OrderRequest $request, $id) {
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

    public function create(OrderRequest $request) {
 // validation
        $items = $request->items;

        foreach ($items as $item) {
            Order::create([
                "id_table" => $id,
                "id_food" => $item["id_food"],
                "quantity" => $item["quantity"],
            ]);
        }

        return response()->json([
            "success" => true,
        ]);
    }

    public function getRevenue() {

        $idOrders = Order::select('id_table')->distinct()->pluck('id_table');
        $result = [];

        foreach ($idOrders as $id) {
            $orders = Order::where('id_table', $id)->with('food')->get();

            $sum = 0;

            foreach ($orders as $order) {
                $sum += $order->food->price * $order->quantity;
            }
            $data = [
                "id" => $id,
                "sum" => $sum
            ];

            array_push($result, $data);
        }

        return response()->json($result);
    }
}
