<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderby('id', 'ASC')->paginate(10);
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
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|min:8',
                'phone' => 'required|size:10',
                'address' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'phone' => 'Vui lòng nhập số điện thoại',
                'size' => 'Phone là 10 chữ số',
                'min' => 'Password tối thiểu 8 ký tự',
                'email' => 'Vui lòng nhập email',
                'email.unique' => 'Email đã tồn tại',
                'address' => 'Vui lòng nhập địa chỉ',
            ]
        );
        if ($request->role == 'Admin') {
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
            'phone' => 'required',
            'address' => 'required',
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'address.required' => 'Vui lòng nhập địac chỉ',
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
