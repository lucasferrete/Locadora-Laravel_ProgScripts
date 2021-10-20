<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('codigoModelo');
            $table->primary('codigoModelo');
            $table->string('nome');
            $table->string('fabricante');
        });
    }

    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
