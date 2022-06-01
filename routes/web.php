<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('form','form');

Route::post('store',[ProductController::class,'store'])->name('store');

Route::get('table',[ProductController::class,'index']);

Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');

Route::post('update/{id}',[ProductController::class,'update'])->name('update');
