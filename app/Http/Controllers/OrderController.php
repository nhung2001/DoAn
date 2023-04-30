<?php

namespace App\Http\Controllers;

use App\Models\Oder_details;
use App\Models\Orders;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // $content = Cart::content();
        // $now = now();
        // // dd((float)Cart::subtotal());
        // $order = Orders::create([
        //     'status' => 0,
        //     'users_id' => auth()->user()->id,
        //     'total' => (float)Cart::subtotal(),
        //     // number_format($totalPrice, 0, ",", ".")
        //     // {{ number_format($product->price, 0, ',', '.') }}
        //     // 'total' => number_format(Cart::subtotal(0, ",", ".")),
        //     //'date' => $now,
        // ]);

        $content = Cart::content();
        $now = now();
        // dd($now);
        // dd((float)Cart::subtotal());
        $order = Orders::create([
            'status' => 0,
            'users_id' => auth()->user()->id,
            'total' => (float)Cart::subtotal(),
            //'date' => $now,
        ]);
        foreach ($content as $orderDetail) {
            $orderDetail = Oder_details::create([
                'price' => $orderDetail->price,
                'quantity' => $orderDetail->qty,
                'products_id' => $orderDetail->id,
                'orders_id' => $order->id,
            ]);
        }
        Cart::destroy();
        return redirect()->route('home_user')->with('success', 'Bạn đã mua hàng thành công');
    }

    public function index()
    {
        $orders = Orders::orderBy('id', 'DESC')->paginate(10);
        return view('backend.order.index', compact('orders'));
    }
    //Sửa đơn hàng
    public function edit($id)
    {
        $status = Orders::find($id);
        return view('backend.order.edit', compact('status'));
    }
    public function update(Request $request, $id)
    {
        if ($request->status == 'Đang xử lý') {
            $status = 0;
        } elseif ($request->status == 'Đang giao hàng') {
            $status = 1;
        } elseif ($request->status == 'Giao hàng thành công') {
            $status = 2;
        }
        Orders::find($id)->update([
            'status' => $status,
        ]);

        return redirect()->route('orderIndex')->with('success', 'Sửa thành công');
    }
    // xóa đơn hàng
    public function destroy($id)
    {
        $orders = Orders::find($id);
        $orders->delete();
        return redirect()->route('orderIndex')->with('success', 'Đã xóa đơn hàng');
    }
    //chi tiết đơn hàng
    public function show($id)
    {
        $orders = Orders::find($id);
        $orderDetails = Oder_details::where('orders_id', $id)->paginate(10);
        return view('backend.order.show', compact('orders', 'orderDetails'));
    }
    //in ra pdf
     public function pdf($id)
    {
        $orders = Orders::find($id);
        $orderDetails = Oder_details::where('orders_id', $id)->get();
        $file_name = $orders->id . '-' . '.pdf';
        $pdf = PDF::loadview('backend.order.pdf', ['orderDetails' => $orderDetails, 'orders' => $orders]);
        return $pdf->download($file_name);
    }
}
