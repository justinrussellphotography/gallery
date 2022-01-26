<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('collection_product', function (Blueprint $table) {
            $table->foreignId('collection_id');
            $table->foreignId('product_id');
            $table->timestamps();
            $table->primary(['collection_id', 'product_id']);
        });
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->date('date')->nullable();
            $table->boolean('downloadable')->default(0);
            $table->boolean('watermarked')->default(0);
            $table->timestamps();
        });
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->uuidMorphs('itemable');
            $table->foreignUuid('photo_id');
            $table->foreignId('product_id');
            $table->unsignedDecimal('price', 6, 2);
            $table->unsignedInteger('quantity');
            $table->json('options')->nullable();
            $table->timestamps();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedDecimal('price', 8, 2);
            $table->unsignedDecimal('shipping', 6, 2)->nullable();
            $table->timestamps();
        });
        Schema::create('photos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('collection_id');
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->unsignedSmallInteger('width');
            $table->unsignedSmallInteger('height');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedDecimal('price', 6, 2);
            $table->unsignedInteger('width_min')->nullable();
            $table->unsignedInteger('height_min')->nullable();
            $table->string('source', 64);
            $table->unsignedDecimal('shipping_price_single', 6, 2);
            $table->unsignedDecimal('shipping_price_additional', 6, 2);
            $table->unsignedDecimal('shipping_price_expedited_single', 6, 2);
            $table->unsignedDecimal('shipping_price_expedited_additional', 6, 2);
            $table->unsignedInteger('shipping_time_min')->nullable();
            $table->unsignedInteger('shipping_time_max')->nullable();
            $table->boolean('digital')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('photos');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('items');
        Schema::dropIfExists('collections');
        Schema::dropIfExists('collection_product');
        Schema::dropIfExists('carts');
    }
}