<?php

    namespace App\Models\Concerns;

    use Illuminate\Database\Eloquent\Relations\MorphToMany;

    interface PassengerLike
    {
        public function orders(): MorphToMany;
    }
