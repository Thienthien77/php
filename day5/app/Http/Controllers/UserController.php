<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public $name;
    function index() {
        // var_dump  die()
        dd(Product::find(1)->name);
        // return view('tinh');
    }

    function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken("token")->accessToken;

            return response()->json([
                "success" => true,
                "access_token" => $token,
            ]);
        }
        return response()->json([
            "success" => false,
            "message" => 'login failed',
        ]);
    }

    function register(Request $request) {
        User::create([
            "email"=>$request->email,
            "name" => $request->name,
            "password" => bcrypt($request->password),
        ]);

        return response()->json([
            "success" => true,
            "message" => 'register success',
        ]);
    }
}
