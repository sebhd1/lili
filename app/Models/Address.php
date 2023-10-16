<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'line1',
        'line2',
        'house_number',
        'city',
        'province',
        'zip_code',
        'addressable_id',
        'addressable_type'
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
