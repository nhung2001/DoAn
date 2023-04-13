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
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->middleware('CheckLogin')->group(function (){

    //home
    Route::get('/home', [HomeAdminController::class, 'index'])->middleware('CheckLogin')->name('home');

    //user
    Route::get('/user', [UserController::class, 'index'])->middleware('CheckLogin')->name('user');
    Route::get('/createUser', [UserController::class, 'create'])->middleware('CheckLogin')->name('createUser');
    Route::post('/store', [UserController::class, 'store'])->middleware('CheckLogin')->name('store');
    Route::get('/editUser/{id}', [UserController::class, 'edit'])->middleware('CheckLogin')->name('editUser');
    Route::post('/updateUser/{id}', [UserController::class, 'update'])->middleware('CheckLogin')->name('updateUser');
    Route::post('/destroyUser/{id}', [UserController::class, 'destroy'])->middleware('CheckLogin')->name('destroyUser');

    //category
    Route::get('/category', [CategoryController::class, 'index'])->middleware('CheckLogin')->name('category');
    Route::get('/createCategory', [CategoryController::class, 'create'])->middleware('CheckLogin')->name('createCategory');
    Route::post('/storeCategory', [CategoryController::class, 'store'])->middleware('CheckLogin')->name('storeCategory');
    Route::get('/editCategory/{id}', [CategoryController::class, 'edit'])->middleware('CheckLogin')->name('editCategory');
    Route::post('/updateCategory/{id}', [CategoryController::class, 'update'])->middleware('CheckLogin')->name('updateCategory');
    Route::post('/destroyCategory/{id}',[CategoryController::class, 'destroy'])->middleware('CheckLogin')->name('destroyCategory');
});
