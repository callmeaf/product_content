<?php

namespace Callmeaf\ProductContent\App\Http\Requests\Api\V1;

use Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductContentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        /**
         * @var ProductRepoInterface $productRepo
         */
        $productRepo = app(ProductRepoInterface::class);
        $product = $productRepo->findById($this->get('product_slug'));
        return $product->resource->authorCanRewrite($this->user()) && userHasRole('author');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(ProductRepoInterface $productRepo): array
    {
        return [
            'product_slug' => ['required',Rule::exists($productRepo->getTable(),$productRepo->getModel()->getRouteKeyName())],
            'content' => ['nullable','string','max:200000'],
        ];
    }
}
