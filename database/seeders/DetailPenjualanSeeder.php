<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi 1
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 15000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 800000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 5,
                'harga' => 500000,
                'jumlah' => 3,
            ],
            // Transaksi 2
            [
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 25000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 1200000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            // Transaksi 3
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 250000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 7000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 90000,
                'jumlah' => 5,
            ],
            // Transaksi 4
            [
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 15000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 1200000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 120000,
                'jumlah' => 10,
            ],
            // Transaksi 5
            [
                'penjualan_id' => 5,
                'barang_id' => 2,
                'harga' => 25000000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 800000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 7,
                'harga' => 250000,
                'jumlah' => 4,
            ],
            // Transaksi 6
            [
                'penjualan_id' => 6,
                'barang_id' => 5,
                'harga' => 500000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 9,
                'harga' => 90000,
                'jumlah' => 7,
            ],
            // Transaksi 7
            [
                'penjualan_id' => 7,
                'barang_id' => 8,
                'harga' => 7000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 120000,
                'jumlah' => 8,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 1200000,
                'jumlah' => 2,
            ],
            // Transaksi 8
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 800000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 5,
                'harga' => 500000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 6,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            // Transaksi 9
            [
                'penjualan_id' => 9,
                'barang_id' => 1,
                'harga' => 15000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 2,
                'harga' => 25000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 250000,
                'jumlah' => 2,
            ],
            // Transaksi 10
            [
                'penjualan_id' => 10,
                'barang_id' => 4,
                'harga' => 1200000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 7000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 120000,
                'jumlah' => 5,
            ]
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
