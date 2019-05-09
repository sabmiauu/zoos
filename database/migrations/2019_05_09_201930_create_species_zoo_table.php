<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesZooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species_zoo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('species_id');
            $table->unsignedBigInteger('zoo_id');
            $table->foreign('species_id')->references('id')->on('species');
            $table->foreign('zoo_id')->references('id')->on('zoos');
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
        Schema::dropIfExists('species_zoo');
    }
}
