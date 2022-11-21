<?php

namespace App\Api\V1\Users\Providers;

use Illuminate\Support\ServiceProvider;

class MigrationsServiceProvider extends ServiceProvider
{

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(base_path('app/Domain/Users/Migrations'));
    }
}
