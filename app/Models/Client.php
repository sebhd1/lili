<?php

namespace App\Models;

use App\Models\Concerns\Addressable;
use App\Models\Concerns\IsAddressable;
use App\Models\Concerns\IsPassengerLike;
use App\Models\Concerns\PassengerLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model implements Addressable, PassengerLike
{
    use HasFactory;
    use IsAddressable;
    use IsPassengerLike;

    protected $fillable = [
        'name',
        'surname',
        'full_name',
        'phone',
    ];

    public function latestOrder(): HasOne
    {
        return $this->orders()->one()->latestOfMany();
    }
}
