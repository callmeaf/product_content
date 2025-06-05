<?php

use Illuminate\Support\Facades\Route;

[
    $controllers,
    $prefix,
    $as,
    $middleware,
] = Base::getRouteConfigFromRepo(repo: \Callmeaf\ProductContent\App\Repo\Contracts\ProductContentRepoInterface::class);

Route::apiResource($prefix, $controllers['product_content'])->only(['store','update'])->middleware($middleware);
// Route::prefix($prefix)->as($as)->middleware($middleware)->controller($controllers['product_content'])->group(function () {
    // Route::get('trashed/list', 'trashed');
    // Route::prefix('{product_content}')->group(function () {
        // Route::patch('/status', 'statusUpdate');
        // Route::patch('/type', 'typeUpdate');
        // Route::patch('/restore', 'restore');
        // Route::delete('/force', 'forceDestroy');
    // });
// });
