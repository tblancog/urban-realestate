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
            $table->string('url_maps', 2048)->nullable();
            $table->boolean('from_price')->nullable()->default(false);
            $table->float('price')->unsigned()->default(0);
            $table->text('description', 2048);
            $table->string('status')->default('on_sale');
            $table->boolean('is_featured')->default(false)->nullable();
            $table->string('contact_name', 50)->nullable();
            $table->string('contact_phone', 50)->nullable();
            $table->integer('building_id')->unsigned()->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('apartments');
    }
}
