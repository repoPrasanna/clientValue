<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Client\ClientInterface;
use App\Repositories\Client\ClientRepository;

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
