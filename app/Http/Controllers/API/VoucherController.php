<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit', 6);
        $status = $request->input('status');
        $kategori = $request->input('kategori');

        if ($id) {
            $voucher = Voucher::where('id', $id)->get();

            if ($voucher->isNotEmpty())
                return ResponseFormatter::success(
                    $voucher,
                    'Data Berhasil Ditemukan'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'data tidak ditemukan',
                    404
                );
        }

        if ($status && $kategori) {
            $voucher = Voucher::where('status', $status)
                ->where('kategori', $kategori)
                ->get();

            if ($voucher->isNotEmpty()) {
                return ResponseFormatter::success(
                    $voucher,
                    'Data Berhasil Ditemukan'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data tidak ditemukan',
                    404
                );
            }
        }

        if ($kategori) {
            $voucher = Voucher::where('kategori', $kategori)->get();

            if ($voucher->isNotEmpty())
                return ResponseFormatter::success(
                    $voucher,
                    'Data Berhasil Ditemukan'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'data tidak ditemukan',
                    404
                );
        }

        if ($status) {
            $voucher = Voucher::where('status', $status)->get();

            if ($voucher->isNotEmpty())
                return ResponseFormatter::success(
                    $voucher,
                    'Data Berhasil Ditemukan'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'data tidak ditemukan',
                    404
                );
        } else {
            $voucher = Voucher::all();
            return ResponseFormatter::success(
                $voucher,
                'Data Berhasil Ditemukan'
            );
        }
    }
}
