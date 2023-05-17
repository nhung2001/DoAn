<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\News;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;

session_start();

class cartController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('name', 'asc')->get();
        $hotNew = News::where('hot', 1)->limit(4)->get();
        return view('frontend.page.cart', compact('categories', 'hotNew'));
    }
    public function save(Request $request)
    {
        $productID = $request->productid_hidden;
        $quantity = $request->qty;
        $products_info = Products::where('id', $productID)->first();
        $data['id'] = $products_info->id;
        $data['sl'] = $products_info->quantity;
        $data['qty'] = $quantity;
        $data['name'] = $products_info->name;
        $data['price'] = $products_info->price;
        if ($products_info->discount > 0) {
            $data['price'] = $products_info->price - ($products_info->price * $products_info->discount)/100;
        } else {
            $data['price'] = $products_info->price;
        }
        $data['weight'] = 0;
        $data['options']['image'] = $products_info->image;
        Cart::add($data);
        Cart::setGlobalTax(0);
        return redirect()->route('cart');
    }
    // Lấy thông tin về số lượng sản phẩm từ form post
    public function update(Request $request)
    {
        foreach ($request->input('quantities') as $rowId => $quantity) {
            $cartItem = Cart::get($rowId);
            $product = Products::findOrFail($cartItem->id);
            if($quantity > $product->quantity && $product->quantity > 0){
                return redirect()->route('cart')->with('error', 'Sản phẩm "' . $product->name . '"  
                vượt quá số lượng hàng trong kho. Vui lòng chọn lại!! Bạn có thể chọn tối đa "' 
                . $product->quantity . '" sản phẩm  ' );
            }
            elseif( $quantity > $product->quantity && $product->quantity === 0){
                return redirect()->route('cart')->with('error', 'Sản phẩm "' . $product->name . '"  
                đã hết hàng. Vui lòng xóa ra khỏi giỏ hàng và chọn lại!! ' );
            }
            Cart::update($rowId, $quantity);
        }
        return redirect()->route('cart')->with('success', 'Đã cập nhật giỏ hàng!!' );
    }
    public function delete($rowId)
    {
        Cart::update($rowId, 0);
        return redirect()->route('cart');
    }
    public function clearCart()
    {
        Cart::destroy();
        return redirect()->route('cart');
    }
}
