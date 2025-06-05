<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_contents', function (Blueprint $table) {
            $table->id();
            /**
             * @var \Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface $productRepo
             */
            $productRepo = app(\Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface::class);
            $table->string('product_slug');
            $table->foreign('product_slug')->references($productRepo->getModel()->getRouteKeyName())->on($productRepo->getTable())->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_contents');
    }
};
