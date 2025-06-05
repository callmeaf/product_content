<?php

namespace Callmeaf\ProductContent\App\Http\Resources\Api\V1;

use Callmeaf\ProductContent\App\Models\ProductContent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read ProductContent $resource
 */
class ProductContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'content' => $this->content,
        ];
    }
}
