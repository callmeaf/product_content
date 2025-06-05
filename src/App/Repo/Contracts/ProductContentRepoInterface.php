<?php

namespace Callmeaf\ProductContent\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\ProductContent\App\Models\ProductContent;
use Callmeaf\ProductContent\App\Http\Resources\Api\V1\ProductContentCollection;
use Callmeaf\ProductContent\App\Http\Resources\Api\V1\ProductContentResource;

/**
 * @extends BaseRepoInterface<ProductContent,ProductContentResource,ProductContentCollection>
 */
interface ProductContentRepoInterface extends BaseRepoInterface
{

}
