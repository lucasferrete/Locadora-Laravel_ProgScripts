<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacoesTable extends Migration
{
    public function up()
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('codigoLocacao');
            $table->primary('codigoLocacao');
            $table->bigInteger('codigoCliente');
            $table->string('placa');
            $table->date('data');
            $table->date('dataDevolucao');
            $table->float('valor', 8, 2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('locacoes');
    }
}
