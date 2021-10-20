<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Registro de Clientes</title>

    <style>
        body{
            background-color: #16161d;
        }
        .formulario{
            margin-top: 90px;
            margin-left: 400px;
            margin-right: 400px;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            -webkit-box-shadow: 5px 8px 34px 8px rgba(0,0,0,0.51); 
            box-shadow: 5px 8px 34px 8px rgba(0,0,0,0.51);
        }
        body h1{
            text-align: center;
            margin-top: 50px;
            font-size: 55px;
            color: rgb(224, 224, 224);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <h1>@if(isset($cliente))Editar Cliente @else Cadastro de Cliente @endif</h1>
        @if(isset($cliente))
        <form name="form-cad" id="form-edit" method="post" action="{{url("cliente/$cliente->cnh")}}">
        @method("PUT")
        @else
        <form name="form-cad" id="form-cad" method="post" action="{{url('cliente')}}">
        @endif
        @csrf   
            <div class="row">
                <div class="col-sm">
                    <div class="formulario">
                        <div class="form-floating mb-3">
                            <input type="text" id="cnh" name="cnh" class="form-control" value="{{$cliente->cnh ?? ''}}" placeholder="CNH">
                            <label for="cnh">CNH</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="nome" name="nome" class="form-control" value="{{$cliente->nome ?? ''}}" placeholder="Nome">
                            <label for="nome">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="endereco" name="endereco" class="form-control" value="{{$cliente->endereco ?? ''}}" placeholder="Endereço">
                            <label for="endereco">Endereço</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="telefone" name="telefone" class="form-control" value="{{$cliente->telefone ?? ''}}" placeholder="Telefone">
                            <label for="telefone">Telefone</label>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

