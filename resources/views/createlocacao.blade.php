<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de Locação</title>
    
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
    <h1>@if(isset($locacao))Editar Locação @else Cadastro de Locação @endif</h1>
        @if(isset($locacao))
        <form name="form-cad" id="form-edit" method="post" action="{{url("locacao/$locacoes->codigoLocacao")}}">
        @method("PUT")
        @else
        <form name="form-cad" id="form-cad" method="post" action="{{url('locacao')}}">
        @endif
        @csrf 
            <div class="row">
                <div class="col-sm">
                    <div class="formulario">
                        <div class="form-floating mb-3">
                            <input type="text" id="codigoLocacao" name="codigoLocacao" class="form-control" value="{{$locacao->codigoLocacao ?? ''}}" placeholder="Código de Locação">
                            <label for="codigo-locacao">Código de Locação</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="codigoCliente" name="codigoCliente" class="form-control" value="{{$locacao->codigoCliente ?? ''}}" placeholder="Código do Cliente">
                            <label for="codigo-cliente">Código do Cliente</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="placaCarro" name="placaCarro" class="form-control" value="{{$locacao->placaCarro ?? ''}}" placeholder="Placa">
                            <label for="codigo-cliente">Placa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" id="data" name="data" class="form-control" value="{{$locacao->data ?? ''}}" placeholder="Data">
                            <label for="data">Data</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" id="dataDevolucao" name="dataDevolucao" class="form-control" value="{{$locacao->dataDevolucao ?? ''}}" placeholder="Data de Devolução">
                            <label for="data-devolucao">Data de Devolução</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="valor" name="valor" class="form-control" value="{{$locacao->valor ?? ''}}" placeholder="Valor">
                            <label for="valor">Valor</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
