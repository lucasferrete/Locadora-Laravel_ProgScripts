<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\LocacaoController;

Route::get('/', function(){
    return view('index');
});
 
Route::get('/cliente', function(){
    return view('indexcliente');
});

Route::get('/carro', function(){
    return view('indexcarro');
});

Route::get('/modelo', function(){
    return view('indexmodelo');
});

Route::get('/locacao', function(){
    return view('indexlocacao');
});

Route::resource('cliente', ClienteController::class);
Route::resource('carro', CarroController::class);
Route::resource('modelo', ModeloController::class);
Route::resource('locacao', LocacaoController::class);

 





