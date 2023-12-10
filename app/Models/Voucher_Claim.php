<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voucher_Claim extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['voucher_id', 'user_id'];


    public function Voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class);
    }


    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
