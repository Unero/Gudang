<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->session()->exists('active_id')) {
            echo '<script>window.alert("Anda sudah login, akan dialihkan ke Dashboard");</script>';
            return redirect('/Dashboard');
        } else {
            return view('login');
        }
    }

    public function auth(Request $request)
    {
        // POST username and password
        $client = Http::get('http://localhost/Gudang-Backend/API/Auth', [
            'username' => $request->username,
            'password' => $request->password
        ]);
        // decode json to array
        $account = json_decode($client->body(), true);

        if ($account['code'] == 200) {
            // Set information into session
            $request->session()->put('active_id', $account[0][0]['id']);
            $request->session()->put('active_name', $account[0][0]['name']);
            $request->session()->put('active_username', $account[0][0]['username']);
            $request->session()->put('active_role_id', $account[0][0]['role_id']);
            return redirect('/Dashboard');
        } else {
            echo '<script>window.alert("Data akun salah, tolong periksa kembali");</script>';
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
