<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function cekObject()
    {
        $anggota = new Anggota();
        dump($anggota);
    }

    public function insert()
    {
        $anggota1 = new Anggota();
        $anggota1->nip = '1234231';
        $anggota1->nama = 'Dika';
        $anggota1->tanggal_lahir = '2001-12-31';
        $anggota1->nilai = '3.0';
        $anggota1->save();
        $anggota2 = new Anggota();
        $anggota2->nip = '1234567';
        $anggota2->nama = 'Diani';
        $anggota2->tanggal_lahir = '2001-08-01';
        $anggota2->nilai = '3.2';
        $anggota2->save();
        $anggota3 = new Anggota();
        $anggota3->nip = '2345323';
        $anggota3->nama = 'Diana';
        $anggota3->tanggal_lahir = '2001-06-21';
        $anggota3->nilai = '3.3';
        $anggota3->save();
        echo 'Data berhasil disimpan';
    }

    public function update()
    {
        $anggota = Anggota::find(1);
        $anggota->nama = 'Dono';
        $anggota->nilai = '3.0';
        $anggota->save();
        echo 'Data berhasil diupdate';
    }

    public function delete()
    {
        $anggota = Anggota::find(2);
        $anggota->delete();
        echo 'Data berhasil dihapus';
    }

    public function all()
    {
        $result = Anggota::all();
        return view('tampilkan_anggota', ['anggotas' => $result]);
    }

    public function find()
    {
        $result = Anggota::find(8);
        return view('tampilkan_anggota', ['anggotas' => [$result]]);
    }

    public function getWhere()
    {
        $result = Anggota::where('nilai', '>', '3.1')->orderBy('nama', 'desc')->get();
        return view('tampilkan_anggota', ['anggotas' => $result]);
    }
}
