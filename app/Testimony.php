<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $fillable = [
        'name',
        'occupation',
        'image',
        'testimony'
    ];
}
