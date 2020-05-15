<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{

    public function index()
    {
        $request = Http::get('http://localhost/Gudang-Backend/API/Users');
        $users = json_decode($request->body(), true);
        return view('admin/users', ['users' => $users]);
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/Gudang-Backend/API/Users', [
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'role_id' => $request->role_id,
        ]);

        if ($client->status() == 200) {
            return redirect('/Users');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function update($id){
        $request = Http::get('http://localhost/Gudang-Backend/API/Users?data='.$id);
        $users = json_decode($request->body(), true);
        return view('admin/users-update', ['data' => $users]);
    }

    public function u_process($id, Request $request){
        $client = Http::asForm()->put('http://localhost/Gudang-Backend/API/Users', [
            'id' => $id,
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'role_id' => $request->role_id,
        ]);

        if ($client->successful()) {
            return redirect('/Users');
        } else {
            return redirect('/Dashboard');
        }
    }

    public function hapus($id)
    {
        $client = Http::asForm()->delete('http://localhost/Gudang-Backend/API/Users', [
            'id' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Users');
        } else {
            return redirect('/Dashboard');
        }
    }
}
