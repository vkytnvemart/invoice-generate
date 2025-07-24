<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        Invoice::create([
            'client_name' => 'Vignesh',
            'email' => 'vickyadirai@gmail.com',
            'item_description' => 'Website Development',
            'quantity' => 2,
            'price_per_item' => 5000,
            'tax_percentage' => 18,
            'subtotal' => 10000,
            'tax_amount' => 1800,
            'total' => 11800,
        ]);
    }
}
