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

    <h1>Minha gestão</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Renda</th>
                <th>Profissão</th>
                <th>Solicitação</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>R$ {{ number_format($cliente->renda, 2, ",", ".") }}</td>
                <td>{{ $cliente->profissao }}</td>
                <td><a href="{{ route('emprestimo.show', $emprestimo->id) }}">Ver solicitações</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

    @vite('resources/js/app.js')
</body>
</html>