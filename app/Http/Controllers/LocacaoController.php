<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    private $objLocacao;

    public function __construct(){
        $this -> objLocacao = new Locacao();
    }

    public function index()
    {
        $modelo = $this -> objLocacao->all();
        return view('indexlocacao', compact('locacao'));
    }

    public function create()
    {
        return view('createlocacao');
    }

    public function store(Request $request)
    {
        $cad = $this -> objLocacao->create([
            'codigoLocacao'=>$request->codigoLocacao,
            'codigoCliente'=>$request->codigoCliente,
            'placaCarro'=>$request->placaCarro,
            'dataDevolucao'=>$request->dataDevolucao,
            'valor'=>$request->valor,
        ]);

        if($cad){
            return redirect('locacao');
        }
    }

    public function show($codigoLocacao)
    {
        $locacao = $this->objLocacao->find($codigoLocacao);
        return view('indexlocacao', compact('locacao'));
    }

    public function edit($codigoLocacao)
    {
        $locacao = $this->objLocacao>find($codigoLocacao);
        return view('createlocacao', compact('locacao'));
    }

    public function update(Request $request, $codigoLocacao)
    {
        $cad = $this -> objLocacao->where(['codigoLocacao'=>$codigoLocacao])->update([
            'codigoLocacao'=>$request->codigoLocacao,
            'codigoCliente'=>$request->codigoCliente,
            'placaCarro'=>$request->placaCarro,
            'dataDevolucao'=>$request->dataDevolucao,
            'valor'=>$request->valor,
        ]);

        if($cad){
            return redirect('locacao');
        }
    }

    public function destroy(Request $locacao, $codigoLocacao)
    {
        Locacao::where('codigoLocacao', $codigoLocacao)->delete();
        return redirect()->back()->with('Sucesso!', 'Excluído com sucesso');
    }
}
