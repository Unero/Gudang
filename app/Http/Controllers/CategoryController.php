<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/Gudang-Backend/API/Category');
        $Category = json_decode($request->body(), true);
        return view('admin/category', ['Category' => $Category]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Category', [
            'name' => $request->name
        ]);

        if ($client->status() == 200) {
            return redirect('/Category');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Category', [
            'id' => $id,
            'name' => $request->name,
        ]);

        if ($client->successful()) {
            return redirect('/Category');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Category', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Category');
        } else {
            return redirect('/Dashboard');
        }
    }
}
