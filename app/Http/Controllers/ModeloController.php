<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    private $objModelo;

    public function __construct(){
        $this -> objModelo = new Modelo();
    }

    public function index()
    {
        $modelo = $this -> objModelo->all() -> sortBy('nome');
        return view('indexmodelo', compact('modelo'));
    }

    public function create()
    {
        return view('createmodelo');
    }

    public function store(Request $request)
    {
        $cad = $this -> objModelo->create([
            'codigoModelo'=>$request->codigoModelo,
            'nome'=>$request->nome,
            'fabricante'=>$request->fabricante,
        ]);

        if($cad){
            return redirect('modelo');
        }
    }

    public function show($codigoModelo)
    {
        $modelo = $this->objModelo->find($codigoModelo);
        return view('indexmodelo', compact('modelo'));
    }

    public function edit($codigoModelo)
    {
        $modelo = $this->objModelo->find($codigoModelo);
        return view('createmodelo', compact('modelo'));
    }

    public function update(Request $request, $codigoModelo)
    {
        $cad = $this -> objModelo->where(['codigoModelo'=>$codigoModelo])->update([
            'codigoModelo' => $request -> codigoModelo,
            'nome' => $request -> nome,
            'fabricante' => $request -> fabricante,
        ]);

        if($cad){
            return redirect('modelo');
        }
    }

    public function destroy(Request $modelo, $codigoModelo)
    {
        Modelo::where('codigoModelo', $codigoModelo)->delete();
        return redirect()->back()->with('Sucesso!', 'Excluído com sucesso');
    }
}
