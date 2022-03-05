<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CHora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cHora', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dia');
            $table->dateTime('hora');
            $table->smallInteger('temperatura');
            $table->string('clima');
            $table->bigInteger('id_Ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cHora');
    }
}
