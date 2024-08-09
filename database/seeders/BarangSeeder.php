<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK001',
                'barang_nama' => 'iPhone 13',
                'harga_beli' => 14000000,
                'harga_jual' => 15000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK002',
                'barang_nama' => 'Laptop ASUS ROG Strix',
                'harga_beli' => 23000000,
                'harga_jual' => 25000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PAKA001',
                'barang_nama' => 'Jaket Kulit Pria',
                'harga_beli' => 700000,
                'harga_jual' => 800000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PAKA002',
                'barang_nama' => 'Sepatu Running Nike',
                'harga_beli' => 1000000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'RUMA001',
                'barang_nama' => 'Blender Philips HR2221',
                'harga_beli' => 450000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'RUMA002',
                'barang_nama' => 'Meja Kerja Minimalis',
                'harga_beli' => 1300000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KESE001',
                'barang_nama' => 'Serum Wajah Vitamin C',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'KESE002',
                'barang_nama' => 'Treadmill Elektrik',
                'harga_beli' => 6500000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BUKU001',
                'barang_nama' => 'Buku Novel "Laskar Pelangi"',
                'harga_beli' => 80000,
                'harga_jual' => 90000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BUKU002',
                'barang_nama' => 'Set Alat Tulis Lengkap',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
