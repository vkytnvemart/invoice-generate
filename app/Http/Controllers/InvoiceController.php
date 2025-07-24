<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInvoiceRequest;
use App\Services\InvoiceCalculator;

use App\Events\InvoiceCreated;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function create() {
    return view('invoices.create');
}

public function store(StoreInvoiceRequest $request, InvoiceCalculator $calculator) {
    // dd('hai');
    $data = $request->validated();
    $totals = $calculator->calculate($data['quantity'], $data['price_per_item'], $data['tax_percentage']);

    $invoice = Invoice::create(array_merge($data, $totals));

    event(new InvoiceCreated($invoice));

    return back()->with('success', 'Invoice submitted and email queued!');
}
}
