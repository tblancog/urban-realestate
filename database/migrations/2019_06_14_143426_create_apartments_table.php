<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('slug', 75);
            $table->string('address', 100);
            $table->string('location', 250);
            
            $table->string('floor', 2);
            $table->string('department', 2);
            $table->string('code', 2);

            $table->string('url_maps', 2048)->nullable();
            $table->unsignedBigInteger('price')->default(0);
            $table->string('area', 3);
            $table->string('rooms', 3);

            $table->text('description', 2048);
            $table->string('status')->default('on_sale');
            $table->string('contact_name', 50)->nullable();
            $table->string('contact_phone', 50)->nullable();
            $table->unsignedInteger('building_id')->nullable();
            
            $table->foreign('building_id')
                  ->references('id')  
                  ->on('buildings')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('apartments');
    }
}