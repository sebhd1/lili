<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'price',
        'decimal',
        'discount',
        'service_id',
        'starts_at',
        'ends_at',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function passengers(): MorphToMany
    {
        return $this->morphedByMany(Passenger::class, 'passenger', 'order_passenger')
            ->using(OrderPassenger::class);
    }

    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'passenger', 'order_passenger')
            ->using(OrderPassenger::class);
    }
}
