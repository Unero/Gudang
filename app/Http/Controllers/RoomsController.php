<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoomsController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Rooms');
        $Rooms = json_decode($request->body(), true);
        return view('admin/rooms', ['Rooms' => $Rooms]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Rooms', [
            'location' => $request->location,
            'desc' => $request->desc
        ]);

        if ($client->status() == 200) {
            return redirect('/Rooms');
        } else {
            return redirect('/dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Rooms', [
            'id' => $id,
            'location' => $request->location,
            'desc' => $request->desc
        ]);

        if ($client->successful()) {
            return redirect('/Rooms');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Rooms', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Rooms');
        } else {
            return redirect('/dashboard');
        }
    }
}
