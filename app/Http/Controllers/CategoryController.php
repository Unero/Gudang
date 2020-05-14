<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Category');
        $category = json_decode($request->body(), true);
        return view('admin/category', ['category' => $category]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Category', [
            'name' => $request->name,
            'active' => $request->active
        ]);

        if ($client->status() == 200) {
            return redirect('/category');
        } else {
            return redirect('/dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::delete('http://localhost/Gudang-Backend/API/Category', [
            'id' => $id
        ]);

        if ($client->status() == 200) {
            return redirect('/brands');
        } else {
            return redirect('/dashboard');
        }
    }
}
