<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'KAT1',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'KAT2',
                'kategori_nama' => 'Pakaian dan Aksesoris',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KAT3',
                'kategori_nama' => 'Peralatan Rumah Tangga',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'KAT4',
                'kategori_nama' => 'Peralatan Kesehatan',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'KAT5',
                'kategori_nama' => 'Buku dan Alat Tulis',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
