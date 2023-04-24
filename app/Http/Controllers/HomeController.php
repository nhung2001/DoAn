<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\Sub_categories;

class HomeController extends Controller
{
    public function index()
    {
        $hotProducts = Products::where('hot', 1)->limit(6)->get();
        $discounts = Products::orderByDesc('discount')->limit(12)->get();
        $hotNews = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $subcategories = Sub_categories::orderBy('name', 'asc')->get();
        return view('frontend.index', compact('hotProducts', 'discounts', 'hotNews', 'categories','subcategories'));
    }
    
    //tin tức
    public function new()
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $New = News::all();
        return view('frontend.page.new', compact('New', 'hotNew', 'categories'));
    }
    public function newDetail($id)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $new_Detail = News::find($id);
        return view('frontend.page.newDetail', compact('hotNew', 'new_Detail', 'categories'));
    }

    //tìm theo tên
    public function searchName(Request $request)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $key = $request->keyword;
        $search_Name = Products::where('name', 'like', '%' . $key . '%')->paginate(1);
        return view('frontend.page.searchName', compact('hotNew', 'search_Name', 'categories'));
    }

    //tìm theo giá
    public function searchPrice(Request $request)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $search_Price = Products::whereBetween('price', [$min_price, $max_price])->paginate(2);
        return view('frontend.page.searchPrice', compact('hotNew', 'search_Price', 'categories'));
    }

    //product
    public function productDetail($id)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $product_Detail = Products::find($id);
        return view('frontend.page.productDetail', compact('hotNew', 'product_Detail','categories'));
    }

    
}
