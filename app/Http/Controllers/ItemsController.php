<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemsController extends Controller
{
    public function index(){
        $reqRoom = Http::get('http://localhost/Gudang-Backend/API/Rooms');
        $Rooms = json_decode($reqRoom->body(), true);
        $reqBrand = Http::get('http://localhost/Gudang-Backend/API/Brands');
        $Brands = json_decode($reqBrand->body(), true);
        $reqCategory = Http::get('http://localhost/Gudang-Backend/API/Category');
        $Category = json_decode($reqCategory->body(), true);
        $reqItem = Http::get('http://localhost/Gudang-Backend/API/Items');
        $Items = json_decode($reqItem->body(), true);
        return view('admin/items', [
            'Items' => $Items,
            'Rooms' => $Rooms,
            'Brands' => $Brands,
            'Category' => $Category
            ]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Items', [
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'description' => $request->description,
            'room_id' => $request->room_id,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
        ]);

        if ($client->status() == 200) {
            return redirect('/Items');
        } else {
            return redirect('/dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Items', [
            'id' => $id,
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'description' => $request->description,
            'room_id' => $request->room_id,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
        ]);

        if ($client->successful()) {
            return redirect('/Items');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Items', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Items');
        } else {
            return redirect('/dashboard');
        }
    }
}
