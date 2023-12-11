<?php

namespace Database\Seeders;

use App\Models\VoucherClaim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Voucher_ClaimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dateNow = date('Y-m-d H:i:s', time());
        $voucher_claim = [
            [
                'voucher_id' => 3,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'voucher_id' => 4,
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],


        ];
        VoucherClaim::insert($voucher_claim);
    }
}
