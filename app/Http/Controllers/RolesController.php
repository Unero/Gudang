<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RolesController extends Controller
{
    public function index(){
        $request = Http::get('http://localhost/Gudang-Backend/API/Roles');
        $Roles = json_decode($request->body(), true);
        return view('admin/Roles', ['Roles' => $Roles]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Roles', [
            'role_name' => $request->rolename
        ]);

        if ($client->status() == 200) {
            return redirect('/Roles');
        } else {
            return redirect('/dashboard');
        }
    }

    public function update($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Roles', [
            'id' => $id,
            'role_name' => $request->rolename,
        ]);

        if ($client->successful()) {
            return redirect('/Roles');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Roles', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Roles');
        } else {
            return redirect('/dashboard');
        }
    }
}
