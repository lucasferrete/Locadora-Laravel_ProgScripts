<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Locadora</title>
    <style>
        h1{
            text-align: center;
        }
        table, th, td{
            border: 1px solid #212529;
        }
    </style>
</head>
<body>
    @yield('cliente')
    @yield('carro')
    @yield('modelo')
    @yield('locacao')
    <script src="{{url('assets/js/scripts.js')}}"></script>
</body>
</html>