<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('cnh');
            $table->primary('cnh');
            $table->string('nome')->lenght(50);
            $table->string('endereco');
            $table->string('telefone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
