<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {
    protected $fillable = [
        'client_name', 'email', 'item_description',
        'quantity', 'price_per_item', 'tax_percentage',
        'subtotal', 'tax_amount', 'total'
    ];
}

