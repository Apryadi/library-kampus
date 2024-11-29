<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurnal extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'volume',
    ];
}
