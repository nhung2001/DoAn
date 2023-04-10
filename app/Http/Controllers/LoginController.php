<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function ViewLogin()
    {
        return view('backend.auth.login');
    }
    public function Login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8|string'
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'password.required' => 'Vui lòng nhập Password',
                'min' => 'Password tối thiểu 8 ký tự',
                'email' => 'Vui nhập đúng định dạng Email'
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth()->user()->role == 1 || Auth()->user()->role == 2) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->with('error', 'Tài khoản của bạn không có quyền truy cập');
            }
        } else {
            return redirect()->back()->with('error', 'Email hoặc Password sai');
        }
    }
    public function Logout()
    {
        Auth::Logout();

        return redirect()->route('viewlogin');
    }
}
