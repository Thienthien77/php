<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


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
            
            $response = Http::asForm()->post('http://localhost:9000/oauth/token', [
                'grant_type' => 'password',
                'client_id' => 3,
                'client_secret' => 'XoDtMv6zDYmJ7U8joTR1Gwq5X95Te1yv4tMxPjj6',
                'username' => 'tinh@gmail.com',
                'password' => '123',
                'scope' => '',
            ]);
            
            return $response->json();

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
