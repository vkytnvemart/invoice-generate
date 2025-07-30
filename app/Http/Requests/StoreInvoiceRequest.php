<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array {
    return [
        'client_name' => 'required|string',
        'email' => 'required|email',
        'item_description' => 'required|string',
        'quantity' => 'required|integer|min:1',
        'price_per_item' => 'required|numeric|min:0',
        'tax_percentage' => 'required|numeric|min:0',
    ];
}

}
