<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $request = Http::get('http://localhost/Gudang-Backend/API/Company');
        $profile = json_decode($request->body(), true);

        $information = Http::get('http://localhost/Gudang-Backend/API/Company/information');
        $inform = json_decode($information->body(), true);
        if (session('active_id') != NULL) {
            return view('admin/Dashboard', ['informasi' => $profile, 'total' => $inform]);
        } else {
            return redirect('/');
        }
    }
}
