<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename', 50);
            $table->string('path', 100);
            $table->integer('order')->default(1);
            $table->integer('apartment_id')->nullable();

            $table->foreign('apartment_id')
                  ->references('id')
                  ->on('apartments');
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
        Schema::dropIfExists('apartment_images');
    }
}
