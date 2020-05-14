<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function index(){
        return view('admin/attributes');
    }
}
