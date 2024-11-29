<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kaset extends Model
{
    protected $fillable = [
        'title',
        'type',
        'content_type',
    ];
}
