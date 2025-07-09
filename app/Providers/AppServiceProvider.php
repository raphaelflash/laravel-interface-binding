<?php

namespace App\Providers;

use App\Interfaces\ExampleInterface;
use App\Models\Example;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the ExampleInterface to the concrete Example model
        $this->app->bind(ExampleInterface::class, Example::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
