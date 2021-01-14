<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    const IMAGE_DIMENSIONS = [
        'lg' => [
            'h' => 100,
            'w' => 300
        ],
        'sm' => [
            'h' => 50,
            'w' => 100
        ]
    ];

    public function imageable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
