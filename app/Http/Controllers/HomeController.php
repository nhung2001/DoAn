<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $hotProducts = Products::where('hot', 1)->limit(6)->get();
        $discount = Products::orderby('hot', 1)->limit(6)->get();
        return view('frontend.index', compact('hotProducts'));
    }
}
