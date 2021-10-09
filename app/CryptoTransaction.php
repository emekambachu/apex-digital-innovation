<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoTransaction extends Model
{
    protected $fillable = [
        'txhash',
        'block',
        'from',
        'to',
        'age',
        'value',
        'txfee'
    ];
}
