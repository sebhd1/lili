<?php

namespace App\Http\Requests;

use App\Enums\OrderStatus;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreOrderRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array {
        return [
            'status' => [
                Rule::enum(OrderStatus::class),
            ],
            'price' => 'required|decimal:0,2',
            'discount' => 'decimal::0,2',
            'is_client_a_passenger' => 'boolean',
            'client_id' => [
                'required',
                'int',
                'min:1',
                'exists:'.Client::class
            ],
            'service_id' => [
                'required',
                'int',
                'min:1',
                'exists:'.Service::class
            ],
            'starts_at' => 'required|date',
            'ends_at' => 'required|date',
        ];
    }


    public function attributes(): array
    {
        return [
            'status' => __('stato'),
            'price' => __('prezzo'),
            'discount' => __('sconto'),
            'is_client_a_passenger' => __('il cliente è un passeggero'),
            'starts_at' => __('inizia il'),
            'ends_at' => __('finisce il'),
        ];
    }
}
