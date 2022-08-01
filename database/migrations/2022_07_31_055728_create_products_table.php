<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('product_name');
            $table->string('product_status');
            $table->string('product_quantity');
            $table->unsignedInteger('id_sub_cate_details');
            $table->foreign('id_sub_cate_details') -> references('id_sub_detail') ->on('sub_categories_details');
            $table->integer('product_views');
            $table->double('product_price');
            $table->double('product_price_discount');
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
};
