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
        $dummyFoto = 'https://via.placeholder.com/150';
        $voucher = [
            [
                'nama' => 'Voucher 1',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 2',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 3',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_C',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 4',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_D',
                'status' => 'claimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 5',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_A',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 6',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_B',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'nama' => 'Voucher 7',
                'foto' => $dummyFoto,
                'kategori' => 'Kategori_D',
                'status' => 'unclaimed',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],

        ];

        Voucher::insert($voucher);
    }
}
