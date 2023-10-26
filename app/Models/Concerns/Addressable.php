<?php

    namespace App\Models\Concerns;

    use Illuminate\Database\Eloquent\Relations\MorphMany;

    interface Addressable
    {

        public function addresses(): MorphMany;

    }
