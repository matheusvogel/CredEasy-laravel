<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CredEasy</title>

    @vite('resources/css/app.scss')
</head>
<body>
<form method="get" action="/emprestimos-salvos">
    @csrf    
<div class="container">

    <h1 class="text-center">Detalhes do empréstimo</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Valor concedido</th>
                <th>Taxa de juros</th>
                <th>Valor final</th>
                <th>N° de parcelas</th>
                <th>N° de parcelas pagas</th>
                <th>Status</th>
                <th>Data de solicitação</th>
                <th>Data de quitação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $emprestimo->valor }}</td>
                <td>{{ $emprestimo->taxa_juros}}</td>
                <td>{{ $emprestimo->valor_final}}</td>
                <td>{{ $emprestimo->parcelas->count() }}</td>
                <td>{{ $emprestimo->numero}}</td>
                <td>{{ $emprestimo->status }}</td>
                <td>{{ $emprestimo->data_solicitacao }}</td>
                <td>{{ $emprestimo->data_quitacao }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('parcela.index', $emprestimo->id) }}" class="btn btn-primary">Consultar parcelas</a>
</div>

    @vite('resources/js/app.js')
</body>
</html>