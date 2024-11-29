<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class koran extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'publication_date',
    ];
}
