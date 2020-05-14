<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoresController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Stores');
        $stores = json_decode($request->body(), true);
        return view('admin/stores', ['store' => $stores]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Stores', [
            'name' => $request->name,
            'active' => $request->active
        ]);

        if ($client->status() == 200) {
            return redirect('/stores');
        } else {
            return redirect('/dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Stores', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/stores');
        } else {
            return redirect('/dashboard');
        }
    }
}
