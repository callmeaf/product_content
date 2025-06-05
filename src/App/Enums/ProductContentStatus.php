<?php

namespace Callmeaf\ProductContent\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum ProductContentStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
