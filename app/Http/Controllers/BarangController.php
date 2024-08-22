<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data Barang',
            'list' => ['Data Barang', 'Data Barang']
        ];

        $activeMenu = 'barang';

        $data = Barang::all();

        return view('barang', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'data' => $data]);
    }
}
