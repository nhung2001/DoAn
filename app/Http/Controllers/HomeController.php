<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Sub_categories;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Oder_details;

class HomeController extends Controller
{
    public function index()
    {
        $hotProducts = Products::where('hot', 1)->limit(6)->get();
        $discounts = Products::orderByDesc('discount')->limit(12)->get();
        $hotNews = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $subcategories = Sub_categories::orderBy('name', 'asc')->get();
        return view('frontend.index', compact('hotProducts', 'discounts', 'hotNews', 'categories', 'subcategories'));
    }
    public function contact()
    {
        $categories = Categories::orderBy('name', 'asc')->get();
        $hotNew = News::where('hot', 1)->limit(4)->get();
        return view('frontend.page.contact', compact('hotNew', 'categories'));
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
        $search_Name = Products::where('name', 'like', '%' . $key . '%')->paginate(2);
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

    //product detail
    public function productDetail($id)
    {
        $hotProducts = Products::where('hot', 1)->limit(4)->get();
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $product_Detail = Products::find($id);
        $currentProduct = Products::find($id);
        $relatedProducts = Products::where('sub_categories_id', $currentProduct->sub_categories_id)
            ->where('id', '!=', $currentProduct->id)->limit(4)->get();
        return view('frontend.page.productDetail', compact(
            'hotNew',
            'product_Detail',
            'categories',
            'hotProducts',
            'currentProduct',
            'relatedProducts'
        ));
    }

    //sản phẩm theo danh mục
    public function productCategory($id)
    {
        $products = Categories::find($id)->products;
        $categories = Categories::orderBy('name', 'asc')->get();
        $hotNew = News::where('hot', 1)->limit(4)->get();
        return view('frontend.page.productCategory', compact('products', 'categories', 'hotNew'));
    }
    // sub
    public function productSubCategory($id)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $products = Sub_categories::find($id)->products;
        return view('frontend.page.productCategory', compact('products','categories', 'hotNew'));
    }

    //đăng nhập
    public function viewLogin()
    {
        $categories = Categories::orderBy('name', 'asc')->get();
        return view('frontend.page.login', compact('categories'));
    }
    public function login(Request $request)
    {
        // $request->validate(
        //     [
        //         'email' => 'required|email',
        //         'password' => 'required|min:8|max:10|string',
        //     ],
        //     [
        //         'email.required' => 'Vui lòng nhập Email',
        //         'email' => 'Vui nhập đúng định dạng Email',
        //         'password.required' => 'Vui lòng nhập Password',
        //         'min' => 'Password tối thiểu 8 ký tự',
        //         'password.max' => 'Password tối đa 10 ký tự',
        //     ]
        // );
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password, 'role' => 0];
        if (Auth::attempt($credentials)) {
            return redirect()->route('home_user');
        } else {
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
            // return redirect()->back()->with('error', 'Email hoặc Password sai');
        }
    }

    //đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home_user');
    }

    //đăng ký
    public function viewRegister()
    {
        $categories = Categories::orderBy('name', 'asc')->get();
        return view('frontend.page.register', compact('categories'));
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|unique:Users,email',
                'password' => 'required|min:8|max:10|string',
                'address' => 'required',
                'phone' => 'required|size:10|regex:/^[0-9]{10}$/',
                'name' => 'required|',
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'email.unique' => 'Email đã tồn tại',
                'email' => 'Vui nhập đúng định dạng Email',
                'password.required' => 'Vui lòng nhập Password',
                'min' => 'Password tối thiểu 8 ký tự',
                'password.max' => 'Password tối đa 10 ký tự',
                'address' => 'Vui lòng nhập Địa chỉ',
                'phone' => 'Số điện thoại là 10 chữ số',
                'phone.max' => 'Số điện thoại là 10 chữ số',
                'name' => 'Vui lòng nhập họ tên',
            ]
        );
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'name' => $request->name,
        ]);
        return redirect()->route('viewLoginUser');
    }

    // danh sách đơn hàng
    public function listOrder()
    {
        $orders = Orders::currentUserOrders()->paginate(10);
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        return view('frontend.page.listOrder', compact('orders','categories','hotNew'));
    }
    public function orderDetail($id)
    {
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        $orders = Orders::find($id);
        $orderDetails = Oder_details::where('orders_id', $id)->paginate(10);
        return view('frontend.page.orderDetail', compact('orders', 'orderDetails','hotNew','categories'));
    }
}
