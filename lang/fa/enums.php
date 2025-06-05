<?php

use Callmeaf\ProductContent\App\Enums\ProductContentStatus;
use Callmeaf\ProductContent\App\Enums\ProductContentType;

return [
    ProductContentStatus::class => [
        ProductContentStatus::ACTIVE->name => 'Active',
        ProductContentStatus::INACTIVE->name => 'InActive',
        ProductContentStatus::PENDING->name => 'Pending',
    ],
    ProductContentType::class => [
        //
    ],
];
