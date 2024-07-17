<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function get() {
        $customer = Customer::all();
        return response()->json($customer);
    }
    public function update(CustomerRequest $request, $id) {
        $customer = Customer::find($request->id) ;
        if (!$customer) {
            return response()->json([
                "status" => "error",
                "message" => "Customer not found"
            ], 404);
        }     
        $customer->customer_name = $request->customer_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;

        $customer->save();

        return response()->json([
            "status" => "success",
            "data" => $customer
        ]);
    }

    public function delete($customer) {
        $customer = Customer::find($customer);

        if (!$customer) {
            return response()->json([
                "status" => "error",
                "message" => "Customer not found"
            ], 404);
        }
        $customer->delete();
        return response()->json([
            "status" => "success"
        ]);
    }

    public function create(CustomerRequest $request) {
            Customer::create([
                "customer_name" => $request->customer_name,
                "email" => $request->email,
                "phone_number" => $request->phone_number,
            ]);
        
        return response()->json([
            "success" => true,
        ]);
    }
}
