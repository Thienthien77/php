<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $name;
    function index() {
        // var_dump  die()
        dd(Product::find(1)->name);
        // return view('tinh');
    }
}
