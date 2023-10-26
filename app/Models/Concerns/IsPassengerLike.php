<?php

    namespace App\Models\Concerns;

    use App\Models\Order;
    use App\Models\OrderPassenger;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;

    trait IsPassengerLike
    {

        public function orders(): MorphToMany {
            return $this->morphToMany(Order::class, 'passenger', 'order_passenger')
                ->using(OrderPassenger::class)
                ->withPivot([
                    'to_pickup',
                    'is_caller',
                ]);
        }
    }
