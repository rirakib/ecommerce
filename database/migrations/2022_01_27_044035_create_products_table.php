<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('product_id');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('subcat_id');
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->string('name');
            $table->string('short_description');
            $table->longText('description');
            $table->bigInteger('product_quantity');
            $table->boolean('product_stutus')->default(1);
            $table->string('product_code');
            $table->bigInteger('product_offer_price');
            $table->bigInteger('price');
            $table->date('offer_start_date');
            $table->date('offer_end_date');
            $table->string('image');
            $table->string('multiple_image');
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
