<?php

namespace App\Http\Controllers;

use App\Models\Oder_details;
use App\Models\Orders;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Models\Categories;
use App\Models\News;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $content = Cart::content();
        $now = now();
        $order = Orders::create([
            'status' => 0,
            'users_id' => auth()->user()->id,
            'total' => Cart::subtotal(0, ',', ','),
        ]);
        foreach ($content as $orderDetail) {
            $orderDetail = Oder_details::create([
                'price' => $orderDetail->price,
                'quantity' => $orderDetail->qty,
                'products_id' => $orderDetail->id,
                'orders_id' => $order->id,
            ]);
        }
        // send mail
        $user = $order->users;
        // dd($user);
        $orderDetails = Oder_details::where('orders_id', $order->id)->get();
        Mail::send('frontend.page.mail', compact('user', 'order', 'orderDetails'), function ($message) use ($user) {
            $message->to($user->email, $user->name);
            $message->subject('Xác nhận đơn hàng');
        });
        Cart::destroy();;
        $orderDetails = Oder_details::where('orders_id', $order->id)->paginate(10);
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        return view('frontend.page.hashCart', compact('order', 'categories', 'hotNew', 'orderDetails'));
    }
    
    // ds đơn hàng của khách hàng
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
        // elseif ($request->status == 'Đã hủy') {
        //     $status = 3;
        // }
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
    
     // danh sách đơn hàng bên user
     public function listOrder()
     {
         $orders = Orders::currentUserOrders()->paginate(10);
         $hotNew = News::where('hot', 1)->limit(4)->get();
         $categories = Categories::orderBy('name', 'asc')->get();
         return view('frontend.page.listOrder', compact('orders', 'categories', 'hotNew'));
     }
     // chi tiết đơn hàng user
     public function orderDetail($id)
     {
         $hotNew = News::where('hot', 1)->limit(4)->get();
         $categories = Categories::orderBy('name', 'asc')->get();
         $orders = Orders::find($id);
         $orderDetails = Oder_details::where('orders_id', $id)->paginate(10);
         return view('frontend.page.orderDetail', compact('orders', 'orderDetails', 'hotNew', 'categories'));
     }
}
