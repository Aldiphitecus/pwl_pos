<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data berhasil';

        // $row = DB::insert('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'update data berhasil, jumlah data yang diupdate: ' . $row . 'baris';

        // $row = DB::insert('delete from m_level where level_kode = ?', ['CUS']);
        // return 'hapus data berhasil, jumlah data yang dihapus ' . $row . 'baris';

        //menampilkan data
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Data Pengguna', 'Level User']
        ];

        $activeMenu = 'level';

        $data = LevelModel::all();
        return view('level', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'data' => $data]);
    }
}
