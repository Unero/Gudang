<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShippingController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/Gudang-Backend/API/Stores');
        $Store = json_decode($request->body(), true);
        return view('admin/stores', ['Store' => $Store]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Stores', [
            'name' => $request->name,
            'active' => $request->active
        ]);

        if ($client->status() == 200) {
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
            return redirect('/Dashboard');
        }
    }
}
