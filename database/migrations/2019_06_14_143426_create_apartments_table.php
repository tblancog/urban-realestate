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

            $table->string('floor', 2);
            $table->string('department', 2);
            $table->string('code', 2);
            $table->unsignedBigInteger('price')->default(0);

            // Información Básica
            $table->integer('rooms')->nullable();
            $table->integer('dormitorios')->nullable();
            $table->integer('banios')->nullable();
            $table->integer('toilettes')->nullable();
            $table->integer('antiguedad')->nullable();
            $table->unsignedBigInteger('expensas')->nullable();
            $table->string('orientacion')->nullable();
            $table->string('disposicion')->nullable();

            // Area
            $table->string('area')->nullable();
            $table->string('area_semicubierta')->nullable();
            $table->string('area_total_construido')->nullable();


            $table->text('description');
            $table->string('status')->default('En_venta');
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
