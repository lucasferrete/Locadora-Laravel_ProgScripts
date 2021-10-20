<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    private $objCliente;

    public function __construct(){
        $this -> objCliente = new Cliente();
    }

    public function index()
    {
        $cliente = $this -> objCliente->all() -> sortBy('nome');
        return view('indexcliente', compact('cliente'));
    }

    public function create()
    {
        return view('createcliente');
    }

    public function store(Request $request)
    {
        $cad = $this -> objCliente->create([
            'cnh'=>$request->cnh,
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
        ]);

        if($cad){
            return redirect('cliente');
        }
    }

    public function show($cnh)
    {
        $cliente = $this->objCliente->find($cnh);
        return view('indexcliente', compact('cliente'));
    }

    public function edit($cnh)
    {
        $cliente = $this->objCliente->find($cnh);
        return view('createcliente', compact('cliente'));
    }

    public function update(Request $request, $cnh)
    {
        $cad = $this -> objCliente->where(['cnh'=>$cnh])->update([
            'cnh' => $request -> cnh,
            'nome' => $request -> nome,
            'endereco' => $request -> endereco,
            'telefone' => $request -> telefone,
        ]);

        if($cad){
            return redirect('cliente');
        }
    }

    public function destroy(Request $cliente, $cnh)
    {
        Cliente::where('cnh', $cnh)->delete();
        return redirect()->back()->with('Sucesso!', 'Excluído com sucesso');
    }
}
