<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename', 200)->nullable();
            $table->integer('order')->nullable();
            $table->integer('building_id')->nullable();

            $table->foreign('building_id')
                  ->references('id')
                  ->on('buildings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_images');
    }
}
