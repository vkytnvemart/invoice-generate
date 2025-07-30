<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\InvoiceCalculator;

class CalculationServiceProvider extends ServiceProvider
{
    
public function register(): void {
    $this->app->singleton(InvoiceCalculator::class, fn () => new InvoiceCalculator());
}


    public function boot(): void
    {
        //
    }
}
