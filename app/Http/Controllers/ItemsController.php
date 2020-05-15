<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(){
        return view('admin/products');
    }

    public function add(){
        return view('admin/productsAdd');
    }

    public function update(){}

    public function hapus(){}
}
