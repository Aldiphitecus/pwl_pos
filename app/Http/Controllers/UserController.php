<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //menambahkan data menggunakan ORM
        // $data = [
        //     'user_id' => 4,
        //     'level_id' => 1,
        //     'username' => 'dika',
        //     'nama' => 'dika',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::insert($data);

        //update data
        // $data = [
        //     'nama' => 'Antok'
        // ];
        // UserModel::where('username', 'dika')->update($data);

        //hapus data
        UserModel::where('username', 'dika')->delete();

        //akses model ke UserModel

        $breadcrumb = (object) [
            'title' => 'Data User',
            'list' => ['Data Pengguna', 'Data User']
        ];

        $activeMenu = 'user';

        $user = UserModel::with('level')->get();
        return view('user', ['activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb, 'data' => $user]);
    }
}
