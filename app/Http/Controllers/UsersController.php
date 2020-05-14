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
            'email' => $request->email,
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'phone' => $request->phone,
            'gender' => $request->gender
        ]);

        if ($client->status() == 200) {
            return redirect('/users');
        } else {
            return redirect('/dashboard');
        }
    }

    // TODO: Fixing Delete
    public function hapus($id)
    {
        $client = Http::delete('http://localhost/Gudang-Backend/API/Users', [
            'id' => $id
        ]);

        if ($client->status() == 200) {
            return redirect('/users');
        } else {
            return redirect('/dashboard');
        }
    }
}
