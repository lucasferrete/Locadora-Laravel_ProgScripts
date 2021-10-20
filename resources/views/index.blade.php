<!-- Grupo 4
BEATRIZ NATIVIDADE SILVA DIAS
KEZIA CALIXTO
LUCAS DOS SANTOS FERRETE
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Home</title>
    <style>
        body{
            text-align: center;
            background-color: #e5e5e5;
        }
        h1{
            font-size: 5em;
        }
        button{
            margin-top:40px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <h1>Locadora</h1>
        <button class="waves-effect waves-light btn" onclick="document.location='/cliente'">Ver tabela de clientes</button>
        <button class="waves-effect waves-light btn" onclick="document.location='/carro'">Ver tabela de carros</button>
        <button class="waves-effect waves-light btn" onclick="document.location='/modelo'">Ver tabela de modelos</button>
        <button class="waves-effect waves-light btn" onclick="document.location='/locacao'">Ver tabela de locacao</button>
    </div>
</body>
</html>