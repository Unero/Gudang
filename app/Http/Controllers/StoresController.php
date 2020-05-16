<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoresController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Stores');
        $Stores = json_decode($request->body(), true);
        return view('admin/stores', ['Stores' => $Stores]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Stores', [
            'store_name' => $request->name,
            'address' => $request->address
        ]);

        if ($client->status() == 200) {
            return redirect('/Stores');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Stores', [
            'id' => $id,
            'store_name' => $request->name,
            'address' => $request->address
        ]);

        if ($client->successful()) {
            return redirect('/Stores');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Stores', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Stores');
        } else {
            return redirect('/dashboard');
        }
    }
}
