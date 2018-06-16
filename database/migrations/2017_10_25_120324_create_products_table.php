<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid');
            $table->integer('product_category_id')->nullable()->default(null);
            $table->integer('product_sub_category_id')->nullable()->default(null);
            $table->integer('product_second_sub_category_id')->nullable()->default(null);
            $table->string('sku');
            $table->string('name');
            $table->double('price');
            $table->double('sale_price');
            $table->double('list_price');
            $table->double('weight');
            $table->string('short_desc');
            $table->text('long_desc');
            $table->text('cart_desc');
            $table->string('image');
            $table->integer('stock');
            $table->boolean('is_live');
            $table->string('location');
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
    }
}
