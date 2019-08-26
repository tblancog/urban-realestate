<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('value')->nullable();
            $table->string('type')->nullable();
            $table->integer('apartment_id')->unsigned();

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
        Schema::dropIfExists('apartment_features');
    }
}
