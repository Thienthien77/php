<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Food;
use App\Models\Order;
use App\Models\Table;
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
            $customerName = "";
            foreach ($order as $item) {
                $food = $item->food;
                $total += $food->price * $item->quantity;
                $customerName = $item->table->customer_name;
            }
            array_push($revenue, [
                "id_table" => $idTable,
                "total" => $total,
                "customer_name" => $customerName,
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