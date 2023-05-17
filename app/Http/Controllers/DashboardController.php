<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\DecimalMoneyFormatter;
use Money\Money;
use Money\Currency;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalProducts = Products::count();
        $totalUsers = User::whereIn('role', [0, 1])->count();
        $totalOrders = Orders::count();
        $orderCancel = Orders::where('status', '3')->count();

        //tổng tiền theo tháng
        $currentMonth = Carbon::now()->month; // Lấy tháng hiện tại
        $totalRevenue = Orders::whereMonth('created_at', $currentMonth)
            ->where('status', 2)
            ->get()
            ->sum(function ($order) {
                // Loại bỏ dấu phân cách hàng nghìn
                $total = str_replace(',', '', $order->total);
                return $total;
            });
        $formatRevenue = number_format($totalRevenue, 0, ',', '.') . ' ₫';

        // biểu đồ
        $currentMonthYear = date('F Y');
        $revenues = DB::table('orders')
            ->where('status', 2)
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(REPLACE(total, ",", "")) as revenue'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get();

        $chartData = [['Date', 'Revenue']];
        foreach ($revenues as $revenue) {
            if (date('F Y', strtotime($revenue->date)) == $currentMonthYear) {
                $formattedDate = date('d', strtotime($revenue->date)); // Định dạng ngày thành "dd"
                $chartData[] = [$formattedDate, $revenue->revenue];
            }
        }
        //$todaylOrders = Orders::whereDate('created_at', $todaylOrders);
        return view(
            'backend.auth.dashboard',
            ['chartData' => json_encode($chartData)],
            compact(
                'totalProducts',
                'totalUsers',
                'totalOrders',
                'orderCancel',
                'totalRevenue',
                'formatRevenue',
                'currentMonth',
                'currentMonthYear'
            )
        );
    }
}
