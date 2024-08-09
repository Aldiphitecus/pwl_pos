<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJL001',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJL002',
                'penjualan_tanggal' => Carbon::now()->subDay(1),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Michael Johnson',
                'penjualan_kode' => 'PJL003',
                'penjualan_tanggal' => Carbon::now()->subDay(2),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Chris Lee',
                'penjualan_kode' => 'PJL004',
                'penjualan_tanggal' => Carbon::now()->subDay(3),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Anna Taylor',
                'penjualan_kode' => 'PJL005',
                'penjualan_tanggal' => Carbon::now()->subDay(4),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Daniel Wilson',
                'penjualan_kode' => 'PJL006',
                'penjualan_tanggal' => Carbon::now()->subDay(5),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Samantha Brown',
                'penjualan_kode' => 'PJL007',
                'penjualan_tanggal' => Carbon::now()->subDay(6),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'David White',
                'penjualan_kode' => 'PJL008',
                'penjualan_tanggal' => Carbon::now()->subDay(7),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Emily Harris',
                'penjualan_kode' => 'PJL009',
                'penjualan_tanggal' => Carbon::now()->subDay(8),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Paul Clark',
                'penjualan_kode' => 'PJL010',
                'penjualan_tanggal' => Carbon::now()->subDay(9),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
