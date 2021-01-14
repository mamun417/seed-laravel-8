<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Base
{
    const TAX_TYPE = [
        1 => 'percent',
        2 => 'dollar'
    ];

    use HasFactory;
}
