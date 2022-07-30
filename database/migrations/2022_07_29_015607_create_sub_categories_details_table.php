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
        Schema::create('sub_categories_details', function (Blueprint $table) {
            $table->increments('id_sub_detail');
            $table->string('sub_detail_name');
            $table->integer('id_sub_category');
            $table->foreign('id_sub_category')->references('sub_categories')->on('id_sub_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories_details');
    }
};
