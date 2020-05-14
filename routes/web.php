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

Route::delete('/users/hapus/{id}', 'UsersController@hapus');

Route::get('/groups', 'GroupsController@index');

Route::get('/brands', 'BrandsController@index');

Route::get('/category', 'CategoryController@index');

Route::get('/stores', 'StoresController@index');

Route::get('/attributes', 'AttributesController@index');

Route::get('/products', 'ProductsController@index');

Route::get('/reports', 'ReportsController@index');

Route::get('/company', 'CompanyController@index');

