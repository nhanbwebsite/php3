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
            $table->unsignedInteger('id_sub_category');
            $table->foreign('id_sub_category')->references('id_sub_category')->on('sub_categories');
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
