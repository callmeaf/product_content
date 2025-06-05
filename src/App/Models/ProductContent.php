<?php

namespace Callmeaf\ProductContent\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductContent extends BaseModel
{
    protected $fillable = [
        'product_slug',
        'content',
    ];

    public static function configKey(): string
    {
        return 'callmeaf-product-content';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }
}
