<?php

namespace Callmeaf\ProductContent\App\Http\Controllers\Api\V1;

use Callmeaf\Base\App\Http\Controllers\Api\V1\ApiController;
use Callmeaf\ProductContent\App\Repo\Contracts\ProductContentRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ProductContentController extends ApiController implements HasMiddleware
{
    public function __construct(protected ProductContentRepoInterface $productContentRepo)
    {
        parent::__construct($this->productContentRepo->config);
    }

    public static function middleware(): array
    {
        return [
           new Middleware(middleware: 'auth:sanctum',only: ['store','update'])
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productContentRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->productContentRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->productContentRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->productContentRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->productContentRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->productContentRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->productContentRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->productContentRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->productContentRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->productContentRepo->forceDelete(id: $id);
    }
}
