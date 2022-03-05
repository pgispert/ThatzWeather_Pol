<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ciudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function(Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('cp');
            $table->string('nCiudad');
            $table->date('dia');
            $table->smallInteger('temperatura');
            $table->string('clima');
            $table->bigInteger('id_cHora');
            $table->bigInteger('id_cDia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
