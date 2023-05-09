<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Orders;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Products::count();
        $totalUsers = User::where('role', '0')->count();

        $totalOrders = Orders::count();
        //$todaylOrders = Orders::whereDate('created_at', $todaylOrders);
        return view('backend.auth.dashboard', compact('totalProducts', 'totalUsers', 'totalOrders'));
    }
}
