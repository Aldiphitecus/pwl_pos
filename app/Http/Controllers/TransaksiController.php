<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data User',
            'list' => ['Data Transaksi', 'Transaksi Penjualan']
        ];

        $activeMenu = 'transaksi';

        // Load relasi user untuk menghindari null value
        $data = TransaksiModel::with('user')->get();

        return view('transaksi', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu,
            'data' => $data
        ]);
    }
}
