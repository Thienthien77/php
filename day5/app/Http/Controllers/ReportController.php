<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function revenue() {
        $idTables = Order::select('id_table')->distinct()->pluck('id_table');

        // dd($idTables);

        $revenue = [];
        // relationship
        // accestor and mutator

        foreach ($idTables as $idTable) {
            $order = Order::where('id_table', $idTable)->get();

            $total = 0;
            foreach ($order as $item) {
                $food = Food::find($item->id_food);
                $total += $food->price * $item->quantity;
            }
            array_push($revenue, [
                "id_table" => $idTable,
                "total" => $total,
            ]);
        }
        return response()->json([
            "success" => true,
            "data" => $revenue,
        ]);

    }
    public function totalByMonth($month) {
        $bill =  Bill::whereMonth('time', '=', $month)->get();

        $total = 0;
        foreach ($bill as $item) {
            $total += $item->total_amount;
        }
        return response()->json([
            "success" => true,
            "data" => $total,
        ]);
    }

    // total all time
}