<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){
        $hotProducts = Products::where('hot', 1)->limit(6)->get();
        $discounts = Products::orderByDesc('discount')->limit(12)->get();
        return view('frontend.index', compact('hotProducts','discounts'));
    }
}
