<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

class OrderPassenger extends MorphPivot
{
    public $incrementing = true;
    protected $fillable = [
        'to_pickup',
        'is_caller',
        'order_id',
        'passenger_id',
        'passenger_type',
    ];

    protected $casts = [
        'to_pickup' => 'boolean',
        'is_caller' => 'boolean'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function passenger(): BelongsTo
    {
        return $this->belongsTo($this->passenger_type, 'passenger_id');
    }
}
