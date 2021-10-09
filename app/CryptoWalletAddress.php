<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoWalletAddress extends Model
{
    protected $fillable = [
        'name',
        'address',
        'remaining',
        'barcode'
    ];
}
