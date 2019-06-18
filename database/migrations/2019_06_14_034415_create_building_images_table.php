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
            $table->string('filename', 50);
            $table->integer('order')->default(1);
            $table->integer('building_id')->nullable();
            $table->boolean('is_placeholder')->default(false);

            $table->foreign('building_id')
                  ->references('id')
                  ->on('buildings');

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
        Schema::dropIfExists('building_images');
    }
}
