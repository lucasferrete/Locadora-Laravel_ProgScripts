<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    protected $primaryKey = 'codigoLocacao';

    use HasFactory;

    protected $fillable = ['codigoLocacao','codigoCliente', 'placaCarro', 'data', 'dataDevolucao', 'valor'];

    public function relCarro(){
        return $this->hasOne('App\Models\Carro', 'placaCarro', 'placa');
    } 
}
