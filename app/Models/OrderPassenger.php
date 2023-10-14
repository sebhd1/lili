<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderPassenger extends Pivot
{

    public $incrementing = true;
    protected $fillable = [
        'order_id',
        'passenger_id'
    ];
}
