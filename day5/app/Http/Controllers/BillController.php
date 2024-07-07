<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function getBills() {
        $bills = Bill::all();

        return response()->json($bills);
    }

    public function create(Request $request) {
        $bills = Bill::create([
            'id_table' => $request->id_table ?? $request->idTable,
            'total_amount' => $request->total_amount ?? $request->totalAmount,
            'time' => $request->time,

        ]);

        return response()->json($bills);
    }
}
