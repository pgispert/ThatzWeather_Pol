<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CDia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cDia', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dia');
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
        Schema::dropIfExists('cDia');
    }
}
