<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('slug', 75);
            $table->string('address', 100);
            $table->string('url_maps', 2048)->nullable();
            $table->boolean('from_price')->nullable()->default(false);
            $table->float('price', 10, 0)->unsigned()->default(0);
            $table->text('description', 2048);
            $table->string('status')->default('on_sale');
            $table->boolean('is_featured')->default(false)->nullable();
            $table->string('contact_name', 50)->nullable();
            $table->string('contact_phone', 50)->nullable();
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
        Schema::dropIfExists('buildings');
    }
}
