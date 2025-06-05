<?php

namespace Callmeaf\ProductContent\App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<ProductContentResource>
 */
class ProductContentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, ProductContentResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
