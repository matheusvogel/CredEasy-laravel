<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-home.css">
    <title>CredEasy</title>

    @vite('resources/css/app.scss')
</head>
<form method="get" action="/cadastrar-emprestimo">
    @csrf    
<div class="container">

    <h1 class="text-center">Listagem de empréstimos</h1>

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
                <td>R$ {{ number_format($emprestimo->valor, 2, ",", ".") }}</td>
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