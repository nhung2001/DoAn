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

Route::prefix('admin.auth')->group(function () {
    Route::get('/viewlogin', [LoginController::class, 'ViewLogin'])->name('viewlogin');
    Route::post('/login', [LoginController::class, 'Login'])->name('login');
    Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
});

//home admin
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;

Route::prefix('admin')->middleware('CheckLogin')->group(function () {

    //home
    Route::get('/home', [HomeAdminController::class, 'index'])->middleware('CheckLogin')->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('CheckLogin')->name('dashboard');

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
    Route::post('/destroyCategory/{id}', [CategoryController::class, 'destroy'])->middleware('CheckLogin')->name('destroyCategory');

    //sub_category
    Route::get('/subcategory', [SubCategoryController::class, 'index'])->middleware('CheckLogin')->name('subcategory');
    Route::get('/createSubCategory', [SubCategoryController::class, 'create'])->middleware('CheckLogin')->name('createSubCategory');
    Route::post('/storeSubCategory', [SubCategoryController::class, 'store'])->middleware('CheckLogin')->name('storeSubCategory');
    Route::get('/editSubCategory/{id}', [SubCategoryController::class, 'edit'])->middleware('CheckLogin')->name('editSubCategory');
    Route::post('/updateSubCategory/{id}', [SubCategoryController::class, 'update'])->middleware('CheckLogin')->name('updateSubCategory');
    Route::post('/destroySubCategory/{id}', [SubCategoryController::class, 'destroy'])->middleware('CheckLogin')->name('destroySubCategory');

    //product
    Route::get('/product', [ProductController::class, 'index'])->middleware('CheckLogin')->name('product');
    Route::get('/createProduct', [ProductController::class, 'create'])->middleware('CheckLogin')->name('createProduct');
    Route::post('/storeProduct', [ProductController::class, 'store'])->middleware('CheckLogin')->name('storeProduct');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->middleware('CheckLogin')->name('editProduct');
    Route::post('/updateProduct/{id}', [ProductController::class, 'update'])->middleware('CheckLogin')->name('updateProduct');
    Route::post('/destroyProduct/{id}', [ProductController::class, 'destroy'])->middleware('CheckLogin')->name('destroyProduct');
    Route::post('/searchProduct', [ProductController::class, 'searchProduct'])->middleware('CheckLogin')->name('searchProduct');

    //new
    Route::get('/newAdmin', [NewController::class, 'index'])->middleware('CheckLogin')->name('newAdmin');
    Route::get('/createNew', [NewController::class, 'create'])->middleware('CheckLogin')->name('createNew');
    Route::post('/storeNew', [NewController::class, 'store'])->middleware('CheckLogin')->name('storeNew');
    Route::get('/editNew/{id}', [NewController::class, 'edit'])->middleware('CheckLogin')->name('editNew');
    Route::post('/updateNew/{id}', [NewController::class, 'update'])->middleware('CheckLogin')->name('updateNew');
    Route::post('/destroyNew/{id}', [NewController::class, 'destroy'])->middleware('CheckLogin')->name('destroyNew');

    //order
    Route::post('/order', [OrderController::class, 'store'])->middleware('CheckLogin')->name('order');
    Route::get('/orderIndex', [OrderController::class, 'index'])->middleware('CheckLogin')->name('orderIndex');
    Route::get('/orderFind', [OrderController::class, 'findOrder'])->middleware('CheckLogin')->name('orderFind');
    Route::get('/orderEdit/{id}', [OrderController::class, 'edit'])->middleware('CheckLogin')->name('orderEdit');
    Route::post('/orderUpdate/{id}', [OrderController::class, 'update'])->middleware('CheckLogin')->name('orderUpdate');
    Route::post('/orderDelete/{id}', [OrderController::class, 'destroy'])->middleware('CheckLogin')->name('orderDelete');
    Route::get('/show/{id}', [OrderController::class, 'show'])->middleware('CheckLogin')->name('orderShow');
    Route::get('order/pdf/{id}', [OrderController::class, 'pdf'])->middleware('CheckLogin')->name('orderPdf');


    //send mail
    Route::get('/mail', [MailController::class, 'index'])->middleware('CheckLogin')->name('mail');
    Route::post('/sendMail', [MailController::class, 'sendMail'])->middleware('CheckLogin')->name('sendMail');
    Route::get('/mailForm', [MailController::class, 'mailForm'])->middleware('CheckLogin')->name('mailForm');
    Route::get('/showMail{id}', [MailController::class, 'showMail'])->middleware('CheckLogin')->name('showMail');
});

//user
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cartController;

Route::prefix('user')->group(function () {

    //home
    Route::get('/home_user', [HomeController::class, 'index'])->name('home_user');

    //contact
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

    // favorite
    route::get('/favorite', [HomeController::class, 'favorite'])->middleware('CheckLoginUser')->name('favorite');
    route::get('/addfavorite/{id}', [HomeController::class, 'addfavorite'])->middleware('CheckLoginUser')->name('addfavorite');
    Route::get('facDelete/{id}', [HomeController::class, 'delete'])->middleware('CheckLogin')->name('facDelete');
    Route::get('facClear', [HomeController::class, 'clear'])->middleware('CheckLogin')->name('facClear');
    //new

    Route::get('/new', [HomeController::class, 'new'])->name('new');
    Route::get('/newDetail/{id}', [HomeController::class, 'newDetail'])->name('newDetail');
    Route::get('/homeView', [HomeController::class, 'home'])->name('homeView');

    //login
    Route::get('/viewLoginUser', [HomeController::class, 'viewLogin'])->name('viewLoginUser');
    Route::post('/loginUser', [HomeController::class, 'login'])->name('loginUser');
    Route::get('/logout', [HomeController::class, 'logout'])->name('user.logout');

    //register
    Route::get('/viewRegister', [HomeController::class, 'viewRegister'])->name('viewRegister');
    Route::post('/Register', [HomeController::class, 'register'])->name('register');

    //product
    Route::get('/productDetail{id}', [HomeController::class, 'productDetail'])->name('productDetail');
    Route::any('/searchName', [HomeController::class, 'searchName'])->name('searchName');
    Route::any('/searchPrice', [HomeController::class, 'searchPrice'])->name('searchPrice');
    Route::get('/productCategory/{id}', [HomeController::class, 'productCategory'])->name('productCategory');
    Route::get('/productSubCategory/{id}', [HomeController::class, 'productSubCategory'])->name('productSubCategory');

    //cart
    Route::get('/cart', [cartController::class, 'index'])->middleware('CheckLoginUser')->name('cart');
    Route::post('/addCart', [cartController::class, 'save'])->middleware('CheckLoginUser')->name('addCart');
    Route::get('/deleteCart/{rowId}', [cartController::class, 'delete'])->middleware('CheckLoginUser')->name('deleteCart');
    Route::any('/updateCart', [cartController::class, 'update'])->middleware('CheckLoginUser')->name('updateCart');
    Route::get('/clearCart', [cartController::class, 'clearCart'])->middleware('CheckLoginUser')->name('clearCart');

    // order
    Route::get('/listOrder', [OrderController::class, 'listOrder'])->middleware('CheckLoginUser')->name('listOrder');
    Route::get('/orderDetail{id}', [OrderController::class, 'orderDetail'])->middleware('CheckLoginUser')->name('orderDetail');
});
