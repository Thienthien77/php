<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getTables() {
        $tables = Table::all();
        return response()->json($tables);
    }

    public function update(Request $request, $id) {
        $table = Table::find($request->id) ;
        $table->customer_name = $request->customerName;
        $table->quantity = $request->quantity;
        $table->status = $request->status;

        $table->save();

        return response()->json([
            "status" => "success",
            "data" => $table
        ]);
    }
}
