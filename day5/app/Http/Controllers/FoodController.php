<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function getFoods() {
        $foods = Food::all();
        return response()->json($foods);
    }
    public function deleteFoods($foodId) {
        $foods = Food::find($foodId);

        if (!$foods) {
            return response()->json([
                "status" => "error",
                "message" => "Food not found"
            ], 404);
        }
        $foods->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function update(Request $request, $id) {
        $foods = Food::find($request->id) ;
        $foods->name = $request->name;
        $foods->img = $request->img;
        $foods->price = $request->price;

        $foods->save();

        return response()->json([
            "status" => "success",
            "data" => $foods
        ]);
    }
    public function create(Request $request) {
        $foods = Food::create([
            "name" => $request->name,
            "img" => $request->img,
            "price" => $request->price,
        ]);

        return response()->json([
            "status" => "success",
            "data" => $foods
        ]);
    }
}
