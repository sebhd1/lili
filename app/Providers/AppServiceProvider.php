<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Blueprint::macro('fullName', fn(string $column = 'full_name') => $this->string($column)
            ->virtualAs("TRIM(CONCAT(IFNULL(name, ''), ' ', IFNULL(surname, '')))")
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
