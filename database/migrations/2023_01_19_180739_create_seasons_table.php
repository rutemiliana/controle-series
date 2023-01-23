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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('number');
            $table->foreignId('series_id')->constrained()->onDelete('cascade');

            /*
            As linhas abaixo funcionam da mesma forma que a linha de cima
            $table->unsignedBigInteger('series_id');
             $table->$table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
             */
            $table->timestamps();
            //unsigned são numeros positivos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
