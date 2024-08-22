<?php

namespace App\Http\Controllers;

use App\Models\StokModel;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data User',
            'list' => ['Data Transaksi', 'Stok Barang']
        ];

        $activeMenu = 'stok';

        $data = StokModel::all();

        return view('stok', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'data' => $data]);
    }
}
