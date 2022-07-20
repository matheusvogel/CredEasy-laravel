<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CredEasy</title>

    @vite('resources/css/app.scss')
</head>
<body>
    
    
<div class="container">

    <h1>Listagem de clientes</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Renda</th>
                <th>Profissão</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->renda }}</td>
                <td>{{ $cliente->profissao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    @vite('resources/js/app.js')
</body>
</html>