<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Data berhasil ditambah';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'update data berhasil, jumlah data yang terupdate ' . $row . 'baris';

        // $data = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'delete data berhasil, jumlah data yang terhapus ' . $data . 'baris';

        $breadcrumb = (object) [
            'title' => 'Data Kategori',
            'list' => ['Data Barang', 'Kategori Barang']
        ];

        $activeMenu = 'kategori';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'data' => $data]);
    }
}
