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
    return view('admin.dashboard');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/users', 'UsersController@index');

Route::post('/users/add', 'UsersController@add');

Route::put('/users/update/{id}', 'UsersController@update');

Route::get('/users/hapus/{id}', 'UsersController@hapus');

Route::get('/groups', 'GroupsController@index');

Route::get('/brands', 'BrandsController@index');
Route::post('/brands/add', 'BrandsController@add');
Route::put('/brands/update/{id}', 'BrandsController@update');
Route::get('/brands/hapus/{id}', 'BrandsController@hapus');

Route::get('/category', 'CategoryController@index');
Route::post('/category/add', 'CategoryController@add');
Route::put('/category/update/{id}', 'CategoryController@update');
Route::get('/category/hapus/{id}', 'CategoryController@hapus');

Route::get('/stores', 'StoresController@index');
Route::post('/stores/add', 'StoresController@add');
Route::put('/stores/update/{id}', 'StoresController@update');
Route::get('/stores/hapus/{id}', 'StoresController@hapus');

Route::get('/attributes', 'AttributesController@index');

Route::get('/products', 'ProductsController@index');
Route::get('/products/add', 'ProductsController@add');

Route::get('/orders', 'OrdersController@index');
Route::get('/orders/add', 'OrdersController@add');

Route::get('/reports', 'ReportsController@index');

Route::get('/company', 'CompanyController@index');

