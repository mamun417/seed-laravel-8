<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDER_STATUS = [
        0 => 'pending',
        1 => 'processing',
        2 => 'delivery',
        3 => 'complete',
        4 => 'cancel',
    ];

    const PAYMENT_STATUS = [
        0 => 'unpaid',
        1 => 'paid',
    ];
}
