<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\ProductContent\App\Models\ProductContent::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\ProductContent\App\Repo\V1\ProductContentRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\ProductContent\App\Http\Resources\Api\V1\ProductContentResource::class,
            'resource_collection' => \Callmeaf\ProductContent\App\Http\Resources\Api\V1\ProductContentCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\ProductContent\App\Http\Resources\Web\V1\ProductContentResource::class,
            'resource_collection' => \Callmeaf\ProductContent\App\Http\Resources\Web\V1\ProductContentCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\ProductContent\App\Http\Resources\Admin\V1\ProductContentResource::class,
            'resource_collection' => \Callmeaf\ProductContent\App\Http\Resources\Admin\V1\ProductContentCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Api\V1\ProductContentTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Web\V1\ProductContentTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductContent\App\Events\Admin\V1\ProductContentTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentIndexRequest::class,
            'store' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentStoreRequest::class,
            'show' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentShowRequest::class,
            'update' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentUpdateRequest::class,
            'destroy' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Api\V1\ProductContentTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentIndexRequest::class,
            'create' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentCreateRequest::class,
            'store' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentStoreRequest::class,
            'show' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentShowRequest::class,
            'edit' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentEditRequest::class,
            'update' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentUpdateRequest::class,
            'destroy' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Web\V1\ProductContentTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentIndexRequest::class,
            'store' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentStoreRequest::class,
            'show' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentShowRequest::class,
            'update' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentUpdateRequest::class,
            'destroy' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductContent\App\Http\Requests\Admin\V1\ProductContentTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'product_content' => \Callmeaf\ProductContent\App\Http\Controllers\Api\V1\ProductContentController::class,
        ],
        RequestType::WEB->value => [
            'product_content' => \Callmeaf\ProductContent\App\Http\Controllers\Web\V1\ProductContentController::class,
        ],
        RequestType::ADMIN->value => [
            'product_content' => \Callmeaf\ProductContent\App\Http\Controllers\Admin\V1\ProductContentController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'product_contents',
            'as' => 'product_contents.',
            'middleware' => [],
        ],
        RequestType::WEB->value => [
            'prefix' => 'product_contents',
            'as' => 'product_contents.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND
            ],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'product_contents',
            'as' => 'product_contents.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\ProductContent\App\Enums\ProductContentStatus::class,
         'type' => \Callmeaf\ProductContent\App\Enums\ProductContentType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\ProductContent\App\Exports\Api\V1\ProductContentsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\ProductContent\App\Exports\Web\V1\ProductContentsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\ProductContent\App\Exports\Admin\V1\ProductContentsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\ProductContent\App\Imports\Api\V1\ProductContentsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\ProductContent\App\Imports\Web\V1\ProductContentsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\ProductContent\App\Imports\Admin\V1\ProductContentsImport::class,
         ],
     ],
];
