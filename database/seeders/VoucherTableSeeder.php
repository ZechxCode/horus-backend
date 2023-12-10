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
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 2',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 3',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_C',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 4',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_D',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 5',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 6',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 7',
                'foto' => 'https://source.unsplash.com/random',
                'kategori' => 'Kategori_D',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],

        ];

        Voucher::insert($voucher);
    }
}
