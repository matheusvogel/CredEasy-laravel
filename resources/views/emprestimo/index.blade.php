<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CredEasy</title>

    @vite('resources/css/app.scss')
</head>
<body>
    

<form method="get" action="/cadastrar-emprestimo">
    @csrf    
<div class="container">

    <h1>Listagem de empréstimos</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Valor</th>
                <th>Data de solicitação</th>
                <th>Parcelas</th>
                <th>Parcelas pagas</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emprestimos as $emprestimo)
            <tr>
                <td>{{ $emprestimo->valor }}</td>
                <td>{{ $emprestimo->data_solicitacao }}</td>
                <td>{{ $emprestimo->parcelas->count() }}</td>
                <td>{{ $emprestimo->numero}}</td>
                <td>{{ $emprestimo->status }}</td>
                <td><a href="{{ route('emprestimo.show', $emprestimo->id) }}">Detalhar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
     <button type="submit" class="btn btn-primary">Novo empréstimo</button>
</div>

    @vite('resources/js/app.js')
</body>
</html>