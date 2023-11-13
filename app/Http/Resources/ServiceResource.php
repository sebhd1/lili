<?php

namespace App\Http\Resources;

use App\Enums\Frequency;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $frequency = Frequency::tryFrom($this->frequency);
        return [
            ...parent::toArray($request),
            'frequency_label' => $frequency->label(),
        ];
    }
}
