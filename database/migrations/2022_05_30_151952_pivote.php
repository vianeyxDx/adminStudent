<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivote', function (Blueprint $table){
            $table->integer('estudiante_id');
            $table->integer('materia_id');
            // $table->foreign('estudiante_id')->references('codigo')->on('estudiante');
            // $table->foreign('materia_id')->references('id')->on('materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivote');
    }
};
