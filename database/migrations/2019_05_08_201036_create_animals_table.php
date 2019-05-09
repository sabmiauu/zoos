<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_number');
            $table->string('genre');
            $table->integer('birth_year');
            $table->string('country');
            $table->string('continent');
            //Cuando tu llave primaria tiene un "bigIncrements" se usa el "unsignedBigInteger" para la llave foránea
            //Con esto estamos creando la columna de la llave foránea
            $table->unsignedBigInteger('species_id');
            //Aquí se asigna la referencia, con el mismo nombre, con la referencia al elemento 'id' de la tabla 'species'
            $table->foreign('species_id')->references('id')->on('species');
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
        Schema::dropIfExists('animals');
    }
}
