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
use App\Models\Products;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $content = Cart::content();
        $now = now();
        if (count($content) === 0) {
            return redirect()->route('cart')
                ->with('error', 'Giỏ hàng trống. Vui lòng thêm sản phẩm trước khi đặt hàng!');
        }
        
        // Kiểm tra số lượng sản phẩm trong giỏ hàng
        $id = $request->id;
        foreach ($content as $orderDetail) {
            $product = Products::find($orderDetail->id);
            if ($product->quantity <= 0) {
                return redirect()->route('cart')
                    ->with('error', 'Sản phẩm "' . $product->name . '" 
                không còn hàng trong kho. Vui lòng xóa sản phẩm này và chọn sản phẩm khác.');
            }
        }
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
        $orderDetails = Oder_details::where('orders_id', $order->id)->get();
        Mail::send('frontend.page.mail', compact('user', 'order', 'orderDetails'), function ($message) use ($user) {
            $message->to($user->email, $user->name);
            $message->subject('Xác nhận đơn hàng');
        });
        Cart::destroy();
        $orderDetails = Oder_details::where('orders_id', $order->id)->paginate(10);
        $hotNew = News::where('hot', 1)->limit(4)->get();
        $categories = Categories::orderBy('name', 'asc')->get();
        return view('frontend.page.hashCart', compact('order', 'categories', 'hotNew', 'orderDetails'));
    }

    // ds đơn hàng admin
    public function index(Request $request)
    {
        $createdDate = $request->input('created_date');

        if ($createdDate) {
            $orders = Orders::whereDate('created_at', $createdDate)->paginate(10);
        } else {
            //$news = News::all();
            $orders = Orders::orderby('created_at', 'DESC')->paginate(5);
        }
        return view('backend.order.index', compact('orders'));
    }
    // đơn hàng theo tháng hiện tại
    public function findOrder(Request $request)
    {
        $currentMonth = Carbon::now()->format('m'); // Lấy tháng hiện tại
        $currentYear = Carbon::now()->format('Y'); // Lấy năm hiện tại
        $day = $request->input('day');

        if ($day) {
            $orderF = Orders::where('status', '2')
                ->whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $currentMonth)
                ->whereDay('created_at', $day)
                ->paginate(10);
        } else {
            //$news = News::all();
            $orderF = Orders::where('status', '2')
                ->whereMonth('created_at', $currentMonth)
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }
        return view('backend.order.find', compact('orderF'));
    }

    //Sửa đơn hàng
    public function edit($id)
    {
        $status = Orders::find($id);
        return view('backend.order.edit', compact('status'));
    }
    public function update(Request $request, $id)
    {
        $order = Orders::find($id);
        if ($request->status == 'Đang xử lý') {
            $status = 0;
        } elseif ($request->status == 'Đang giao hàng') {
            $status = 1;
        } elseif ($request->status == 'Giao hàng thành công') {
            $status = 2;
        } elseif ($request->status == 'Đã hủy') {
            $status = 3;
        }

        if ($request->status == 'Giao hàng thành công') {
            foreach ($order->orderDetail as $orderDetails) {
                $product = Products::find($orderDetails->products_id);
                $product->quantity -= $orderDetails->quantity;
                $product->save();
            }
        }
        $order->update([
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
