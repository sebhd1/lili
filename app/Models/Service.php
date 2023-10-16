<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency',
        'name',
        'description',
        'fee',
        'additional_fee',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
