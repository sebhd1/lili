<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'full_name',
        'phone',
        'is_under_age',
    ];

    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
