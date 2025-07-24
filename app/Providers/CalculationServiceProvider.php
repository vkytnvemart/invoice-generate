<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\InvoiceCalculator;

class CalculationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
public function register(): void {
    $this->app->singleton(InvoiceCalculator::class, fn () => new InvoiceCalculator());
}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
