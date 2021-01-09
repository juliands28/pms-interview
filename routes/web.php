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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
->namespace('Admin')
->group(function() {
    Route::get('/', 'DashboardController@index')->name('admin-dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('unit', 'UnitController');
    Route::resource('product', 'ProductController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');