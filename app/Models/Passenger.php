<?php

namespace App\Models;

use App\Models\Concerns\Addressable;
use App\Models\Concerns\IsAddressable;
use App\Models\Concerns\IsPassengerLike;
use App\Models\Concerns\PassengerLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model implements PassengerLike, Addressable
{
    use HasFactory;
    use IsPassengerLike;
    use IsAddressable;

    protected $fillable = [
        'name',
        'surname',
        'full_name',
        'phone',
        'is_under_age',
    ];
}
