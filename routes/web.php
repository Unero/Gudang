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

// Done
Route::get('/Dashboard', 'DashboardController@index');

// Not: Update
Route::get('/Users', 'UsersController@index');
Route::post('/Users/add', 'UsersController@add');
Route::get('/Users/update/{id}', 'UsersController@update');
Route::post('/Users/u_process/{id}', 'UsersController@u_process');
Route::get('/Users/hapus/{id}', 'UsersController@hapus');

// Done
Route::get('/Roles', 'RolesController@index');
Route::post('/Roles/add', 'RolesController@add');
Route::post('/Roles/update/{id}', 'RolesController@update');
Route::get('/Roles/hapus/{id}', 'RolesController@hapus');

// Done
Route::get('/Brands', 'BrandsController@index');
Route::post('/Brands/add', 'BrandsController@add');
Route::post('/Brands/update/{id}', 'BrandsController@update');
Route::get('/Brands/hapus/{id}', 'BrandsController@hapus');

// Done
Route::get('/Category', 'CategoryController@index');
Route::post('/Category/add', 'CategoryController@add');
Route::post('/Category/update/{id}', 'CategoryController@update');
Route::get('/Category/hapus/{id}', 'CategoryController@hapus');

// Done
Route::get('/Items', 'ItemsController@index');
Route::post('/Items/add', 'ItemsController@add');
Route::post('/Items/update/{id}', 'ItemsController@update');
Route::get('/Items/hapus/{id}', 'ItemsController@hapus');

// Done
Route::get('/Rooms', 'RoomsController@index');
Route::post('/Rooms/add', 'RoomsController@add');
Route::post('/Rooms/update/{id}', 'RoomsController@update');
Route::get('/Rooms/hapus/{id}', 'RoomsController@hapus');

// Done
Route::get('/Stores', 'StoresController@index');
Route::post('/Stores/add', 'StoresController@add');
Route::post('/Stores/update/{id}', 'StoresController@update');
Route::get('/Stores/hapus/{id}', 'StoresController@hapus');

// Done
Route::get('/Shipping', 'ShippingController@index');
Route::post('/Shipping/add', 'ShippingController@add');
Route::post('/Shipping/update/{id}', 'ShippingController@update');
Route::get('/Shipping/hapus/{id}', 'ShippingController@hapus');

// Done
Route::get('/Company', 'CompanyController@index');
Route::put('/Company/update/{name}', 'CompanyController@update');
Route::get('/Report', 'ReportsController@index');

Route::get('/', 'AuthController@login');
Route::post('/Auth/auth', 'AuthController@auth');
Route::get('/Auth/logout', 'AuthController@logout');
