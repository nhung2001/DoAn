<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $hotProducts = Products::where('hot', 1)->limit(6)->get();
        $discounts = Products::orderByDesc('discount')->limit(12)->get();
        $hotNews = News::where('hot', 1)->limit(4)->get();
        return view('frontend.index', compact('hotProducts','discounts','hotNews'));
    }
   
    public function new()
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $New =News::all();
        return view('frontend.page.new', compact ('hotNew','New'));
    }
    public function newDetail($id)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $new_Detail = News::find($id);
        return view('frontend.page.newDetail', compact ('hotNew','new_Detail'));
    }
}
