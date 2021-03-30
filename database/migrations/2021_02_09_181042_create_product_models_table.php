<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('publisher_manufacturer');
            $table->string('header');
            $table->string('stock_availability');
            $table->string('price_site');
            $table->string('price_purchase');
            $table->string('discount_rate');
            $table->string('ISBN');
            $table->string('RRP');
            $table->string('solded');
            $table->string('year');
            $table->string('tags');
            $table->string('comx_img_1');
            $table->string('comx_img_2');
            $table->string('comx_img_3');
            $table->string('comx_img_4');
            $table->string('comx_img_5');
            $table->text('comx_description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
}
