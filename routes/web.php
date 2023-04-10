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


//home admin
use App\Http\Controllers\HomeAdminController;

Route::get('/admin_home', [HomeAdminController::class, 'index'])->name('admin_home');

