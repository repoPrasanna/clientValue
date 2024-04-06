<?php

namespace App\Providers;

use App\Repositories\Client\ClientInterface;
use App\Repositories\Client\ClientRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ClientInterface::class, ClientRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
