<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeAdminController extends Controller
{
    public function index()
    {
        if(Auth()->user()->role == 1){
            return view('backend.layout.home');
        }else{
            return redirect()->route('dashboard');
        }
    }
}
