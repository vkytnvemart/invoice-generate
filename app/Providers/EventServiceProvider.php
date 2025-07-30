<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
   
  protected $listen = [
    \App\Events\InvoiceCreated::class => [
        \App\Listeners\SendInvoiceEmail::class,
    ],
];

}
