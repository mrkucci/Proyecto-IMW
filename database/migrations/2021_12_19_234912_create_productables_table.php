<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductablesTable extends Migration
{
    public function up()
    {
        Schema::create('productables', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->morphs('productable');

            $table->foreign('product_id')->references('id')->on('products');   
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
