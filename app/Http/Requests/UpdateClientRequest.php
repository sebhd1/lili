<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'surname' => 'required|string|min:3|max:255',
            'phone' => 'required|string|unique',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => __('nome'),
            'surname' => __('cognome'),
            'phone' => __('numero di telefono'),
        ];
    }
}
