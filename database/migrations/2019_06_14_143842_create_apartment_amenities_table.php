<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amenity_id')->nullable();
            $table->integer('apartment_id')->nullable();
            $table->timestamps();

            $table->foreign('amenity_id')
                  ->references('id')
                  ->on('amenities');

            $table->foreign('apartment_id')
                  ->references('id')
                  ->on('apartments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_amenities');
    }
}
