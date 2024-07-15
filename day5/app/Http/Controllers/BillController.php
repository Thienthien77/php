<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillRequest;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class BillController extends Controller
{
    public function getBills() {
        $bills = Bill::all();

        return response()->json($bills);
    }

    public function create(BillRequest $request) {
        $bills = Bill::create([
            'id_table' => $request->id_table ?? $request->idTable,
            'total_amount' => $request->total_amount ?? $request->totalAmount,
            'time' => Date::now()->format('Y-m-d H:i:s'),

        ]);

        return response()->json($bills);
    }
    public function delete($billId) {
        $bills = Bill::find($billId);

        if (!$bills) {
            return response()->json([
                "status" => "error",
                "message" => "Bill not found"
            ], 404);
        }
        $bills->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function update(BillRequest $request, $id) {
        $bills = Bill::find($request->id) ;
        $bills->id_table = $request->id_table;
        $bills->total_amount = $request->total_amount;
        $bills->time = date('Y-m-d H:i:s');

        $bills->save();

        return response()->json([
            "status" => "success",
            "data" => $bills
        ]);
    }
}
