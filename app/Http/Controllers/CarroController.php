<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Modelo;
use App\Models\Locacao;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    private $objCarro;

    public function __construct(){
        $this ->objCarro = new Carro();
    }

    public function index()
    {
        $carro = $this -> objCarro -> all();
        return view('indexcarro', compact('carro'));
    }

    public function create()
    {
        return view('createcarro');
    }

    public function store(Request $request)
    {
        $cad = $this -> objCarro->create([
            'placa'=>$request->placa,
            'codigoModelo'=>$request->codigoModelo,
            'anoFabricacao'=>$request->anoFabricacao,
            'cor'=>$request->cor,
        ]);

        if($cad){
            return redirect('carro');
        }
    }

    public function show($placa)
    {
        $carro = $this->objCarro->find($placa);
        return view('indexcarro', compact('carro'));
    }

    public function edit($placa)
    {
        $carro = $this->objCarro->find($placa);
        return view('createcarro', compact('carro'));
    }

    public function update(Request $request, $placa)
    {
        $cad = $this -> objCarro->where(['placa'=>$placa])->update([
            'placa' => $request -> placa,
            'codigoModelo' => $request -> codigoModelo,
            'anoFabricacao' => $request -> anoFabricacao,
            'cor' => $request -> cor,
        ]);

        if($cad){
            return redirect('carro');
        }
    }

    public function destroy(Request $carro, $placa)
    {
        Carro::where('placa', $placa)->delete();
        return redirect()->back()->with('Sucesso!', 'Excluído com sucesso');
    }
}
