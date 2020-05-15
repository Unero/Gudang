<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShippingController extends Controller
{
    public function index(){
        $reqShipping = Http::get('http://localhost/Gudang-Backend/API/Shipping');
        $Shipping = json_decode($reqShipping->body(), true);
        $reqStore = Http::get('http://localhost/Gudang-Backend/API/Stores');
        $Stores = json_decode($reqStore->body(), true);
        $reqUser = Http::get('http://localhost/Gudang-Backend/API/Users');
        $Users = json_decode($reqUser->body(), true);
        $reqItem = Http::get('http://localhost/Gudang-Backend/API/Items');
        $Items = json_decode($reqItem->body(), true);
        return view('admin/shipping', [
            'Shipping' => $Shipping,
            'Items' => $Items,
            'Stores' => $Stores,
            'Users' => $Users
            ]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Shipping', [
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'type' => $request->type,
            'store_id' => $request->store_id,
            'user_id' => $request->user_id,
            'time' => strtotime($request->time)
        ]);

        if ($client->status() == 200) {
            return redirect('/Shipping');
        } else {
            return redirect('/dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Shipping', [
            'id' => $id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'type' => $request->type,
            'store_id' => $request->store_id,
            'user_id' => $request->user_id,
            'time' => $request->time
        ]);

        if ($client->successful()) {
            return redirect('/Shipping');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Shipping', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Shipping');
        } else {
            return redirect('/dashboard');
        }
    }
}
