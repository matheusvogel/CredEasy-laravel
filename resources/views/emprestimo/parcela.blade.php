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

    <h1 class="text-center">Listagem da parcela</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>N° de parcelas</th>
                <th>Valor da parcela</th>
                <th>Data de vencimento</th>
                <th>Multa por atraso</th>
                <th>Valor pago</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcelas as $parcela)
            <tr>
                <td>{{ $parcela->id }}</td>
                <td>{{ $parcela->valor }}</td>
                <td>{{ $parcela->data_vencimento }}</td>
                <td>{{ $parcela->multa }}</td>
                <td>{{ $parcela->valor_pago }}</td>
                <td>{{ $parcela->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    @vite('resources/js/app.js')
</body>
</html>