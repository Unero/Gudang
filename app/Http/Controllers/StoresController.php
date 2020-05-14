<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index(){
        return view('admin/stores');
    }
}
