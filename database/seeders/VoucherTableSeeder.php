<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dateNow = date('Y-m-d H:i:s', time());
        $voucher = [
            [
                'nama' => 'Voucher 1',
                'foto' => 'url1.jpg',
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 2',
                'foto' => 'url2.jpg',
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 3',
                'foto' => 'url3.jpg',
                'kategori' => 'Kategori_C',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 4',
                'foto' => 'url4.jpg',
                'kategori' => 'Kategori_D',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 5',
                'foto' => 'url5.jpg',
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 6',
                'foto' => 'url6.jpg',
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 7',
                'foto' => 'url7.jpg',
                'kategori' => 'Kategori_D',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],

        ];

        Voucher::insert($voucher);
    }
}
