<?php

namespace App\Http\Controllers\API;

use App\Models\Voucher;
use App\Models\VoucherClaim;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
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

    public function updateVoucher(Request $request, $id)
    {

        try {
            $voucher = Voucher::find($id);
            if (!$voucher) {
                return ResponseFormatter::error(null, 'data not found', 404);
            }
            $status = $request->input('status');

            // Assuming 'status' is a required field in the request
            if (!$status) {
                return ResponseFormatter::error(null, 'Status field is required', 422);
            }

            $voucher->update(['status' => $status]);
            // $voucher->whereStatus('claimed')->get();
            if ($status == 'claimed') {

                VoucherClaim::create(['voucher_id' => $voucher->id]);
            } elseif ($status == 'unclaimed') {
                VoucherClaim::where('voucher_id', $voucher->id)->delete();
            }

            return ResponseFormatter::success($voucher, $status, 'success Claimed voucher');
        } catch (\Exception $e) {
            return ResponseFormatter::errorServerError($e->getMessage(), 'error update voucher');
        }
    }
}
