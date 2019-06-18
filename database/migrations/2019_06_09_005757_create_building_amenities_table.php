<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('amenity_id')->nullable();
            $table->unsignedInteger('building_id')->nullable();
            
            $table->foreign('amenity_id')
                  ->references('id')
                  ->on('amenities');
            
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
        Schema::dropIfExists('building_amenities');
    }
}
