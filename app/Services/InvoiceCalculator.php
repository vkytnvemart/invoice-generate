<?php

namespace App\Services;

class InvoiceCalculator {
    public function calculate($quantity, $price, $tax): array {
        $subtotal = $quantity * $price;
        $taxAmount = ($subtotal * $tax) / 100;
        $total = $subtotal + $taxAmount;

        return [
            'subtotal' => round($subtotal, 2),
            'tax_amount' => round($taxAmount, 2),
            'total' => round($total, 2)
        ];
    }
}
