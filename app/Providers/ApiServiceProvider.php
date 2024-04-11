<?php

namespace App\Providers;

use App\Services\Api\ApiClientInterface;
use App\Services\Api\GuzzleApiClient;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ApiClientInterface::class, GuzzleApiClient::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
