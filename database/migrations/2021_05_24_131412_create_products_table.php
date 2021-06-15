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
            $table->string('publisher_manufacturer');
            $table->string('header');
            $table->string('stock_availability');
            $table->float('price_site');
            $table->float('price_purchase');
            $table->string('discount_rate');
            $table->string('ISBN');
            $table->float('RRP');
            $table->string('solded');
            $table->string('year');
            $table->string('tags');
            $table->string('comx_img_1')->default('нет фото');
            $table->string('comx_img_2')->default('нет фото');
            $table->string('comx_img_3')->default('нет фото');
            $table->string('comx_img_4')->default('нет фото');
            $table->string('comx_img_5')->default('нет фото');
            $table->text('comx_description');
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
