<?php

    namespace App\Models\Concerns;

    use App\Models\Address;
    use Illuminate\Database\Eloquent\Relations\MorphMany;

    trait IsAddressable
    {

        public function addresses(): MorphMany
        {
            return $this->morphMany(Address::class, 'addressable');
        }

    }
