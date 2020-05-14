<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BrandsController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Brands');
        $brands = json_decode($request->body(), true);
        return view('admin/brands', ['brands' => $brands]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Brands', [
            'name' => $request->name,
            'active' => $request->active
        ]);

        if ($client->status() == 200) {
            return redirect('/brands');
        } else {
            return redirect('/dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Brands', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/brands');
        } else {
            return redirect('/dashboard');
        }
    }
}
