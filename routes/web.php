<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login admin
use App\Http\Controllers\LoginController;

Route::prefix('admin.auth')->group(function(){
    Route::get('/viewlogin', [LoginController::class, 'ViewLogin'])->name('viewlogin');
    Route::post('/login', [LoginController::class, 'Login'])->name('login');
    Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
});

//home admin
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->middleware('CheckLogin')->group(function (){

    //home
    Route::get('/home', [HomeAdminController::class, 'index'])->middleware('CheckLogin')->name('home');

    //user
    Route::get('/user', [UserController::class, 'index'])->middleware('CheckLogin')->name('user');
    Route::get('/createUser', [UserController::class, 'create'])->middleware('CheckLogin')->name('createUser');
    Route::post('/store', [UserController::class, 'store'])->middleware('CheckLogin')->name('store');
});
