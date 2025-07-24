@component('mail::message')
# Invoice Summary

Hello {{ $invoice->client_name }},

Thank you for your business. Below are your invoice details:

---

### Invoice Details

**Item:** {{ $invoice->item_description }}
**Quantity:** {{ $invoice->quantity }}
**Price per Item:** ₹{{ number_format($invoice->price_per_item, 2) }}
**Subtotal:** ₹{{ number_format($invoice->subtotal, 2) }}
**Tax:** ₹{{ number_format($invoice->tax_amount, 2) }}
**Total:** ₹{{ number_format($invoice->total, 2) }}

---

**Date:** {{ $invoice->created_at->format('d-m-Y') }}

---

Thanks & Regards,
**{{ config('app.name') }}**
@endcomponent
