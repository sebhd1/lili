<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'price',
        'decimal',
        'discount',
        'is_client_a_passenger',
        'client_id',
        'service_id',
        'starts_at',
        'ends_at',
    ];

}
