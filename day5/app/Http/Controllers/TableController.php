<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function create(TableRequest $request) {
        $table = Table::create([
            "customer_name" => $request->customer_name,
            "quantity" => $request->quantity,
            "status" => $request->status,
        ]);

        return response()->json([
            "status" => "success",
            "data" => $table
        ]);
    }
    public function getTables() {
        $tables = Table::all();
        return response()->json($tables);
    }
    public function update(TableRequest $request, $id) {
        $table = Table::find($request->id) ;
        $table->customer_name = $request->customer_name;
        $table->quantity = $request->quantity;
        $table->status = $request->status;

        $table->save();

        return response()->json([
            "status" => "success",
            "data" => $table
        ]);
    }

    public function deleteTables($tableId) {
        $table = Table::find($tableId);

        if (!$table) {
            return response()->json([
                "status" => "error",
                "message" => "Table not found"
            ], 404);
        }
        $table->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
