<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename', 50);
            $table->string('path', 100);
            $table->integer('order')->default(1);
            $table->integer('building_id')->nullable();
            // $table->integer('apartment_id')->nullable();

            $table->foreign('building_id')
                  ->references('id')
                  ->on('buildings');

            // $table->foreign('apartment_id')
            //       ->references('id')
            //       ->on('apartments');

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
        Schema::dropIfExists('images');
    }
}
