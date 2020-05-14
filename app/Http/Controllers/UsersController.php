<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function index(){
        $response = Http::get('http://localhost/Gudang-Backend/API/Users');
        return view('admin/users');
    }
}
