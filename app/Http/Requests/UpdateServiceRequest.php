<?php

namespace App\Http\Requests;

use App\Enums\Frequency;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'frequency' => [
                'required',
                Rule::enum(Frequency::class),
            ],
            'name' => 'required|string|min:3|max:255',
            'description' => 'nullable|string',
            'fee' => 'required|decimal:0,2',
            'additional_fee' => 'nullable|decimal:0,2',
        ];
    }

    public function attributes(): array
    {
        return [
            'frequency' => __('frequenza'),
            'name' => __('nome'),
            'description' => __('descrizione'),
            'fee' => __('tassa'),
            'additional_fee' => __('tassa aggiuntiva'),
        ];
    }
}
