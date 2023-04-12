<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderby('id', 'ASC')->paginate(10);
        return view('backend.user.index', compact('users'));
    }
}
