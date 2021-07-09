<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku.index');
    }

    public function maps()
    {
        return view('buku.maps');
    }

    public function search(Request $request)
    {
        $data = $request->input('cari');
        return view('buku.index', ['data' => $data]);
    }
}
