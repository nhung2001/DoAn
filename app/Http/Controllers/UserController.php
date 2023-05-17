<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index()
    // {
    //     $users = User::orderby('id', 'ASC')->paginate(10);
    //     return view('backend.user.index', compact('users'));
    // }
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $users = User::where('email', 'like', '%' . $keyword . '%')->paginate(10);
        } else {
            //$User = User::all();
            $users = User::whereIn('role', [0, 1])->paginate(10);
        }
        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email', 'regex:/^[A-Za-z0-9\.\-_]+@gmail\.com$/i', 'unique:Users,email'],
                'password' => 'required|min:8|max:10|string',
                'address' => 'required',
                'phone' => 'required|size:10|regex:/^[0-9]{10}$/',
                'name' => 'required',
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'email.email' => 'Vui lòng nhập đúng định dạng Email',
                'email.regex' => 'Email không hợp lệ',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Vui lòng nhập Password',
                'password.min' => 'Password tối thiểu 8 ký tự',
                'password.max' => 'Password tối đa 10 ký tự',
                'address' => 'Vui lòng nhập Địa chỉ',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'phone.size' => 'Số điện thoại là 10 chữ số',
                'phone.regex' => 'Số điện thoại là 10 chữ số',
                'name' => 'Vui lòng nhập họ tên',
            ]
        );
        if ($request->role == 'Employee') {
            $role = 1;
        } else {
            $role = 0;
        }
        // $email = User::where('email')->get();
        // if ($request->email != $email) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'role' => $role,
            ]);
            return redirect()->route('user')->with('success', 'Thêm mới thành công');
        // } else {
        //     return redirect()->route('user')->with('error', 'Email đã tồn tại');
        // }
    }
    //sửa user
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|size:10|regex:/^[0-9]{10}$/',
            'address' => 'required',
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.size' => 'Số điện thoại là 10 chữ số',
            'phone.regex' => 'Số điện thoại là 10 chữ số',
            'address.required' => 'Vui lòng nhập địa chỉ',
        ]
    );
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('user')->with('success', 'Đã cập nhật thông tin người dùng');
    }
    //xóa user
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('user')->with('success', 'Đã xóa người dùng');
    }
    
}
