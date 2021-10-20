<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{

    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->timestamps();
            $table->string('placa', 10);
            $table->primary('placa');
            $table->bigInteger('codigoModelo');
            $table->year('anoFabricacao');
            $table->string('cor');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
