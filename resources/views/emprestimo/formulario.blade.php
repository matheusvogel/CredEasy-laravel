<!DOCTYPE html>
<html lan="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../css/cadastro.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;
    700&family=Open+Sans:wght@300;400;700&family=Roboto&display=swap" rel="stylesheet">
    <title>Solicitar empréstimo</title>
</head>

<body>
<h1 class="text-center">Solicitar empréstimo</h1>

<form method="post" action="/emprestimos-salvos">
    @csrf

    <div class="container mt-2 ml-2">
        <div class="row">
            <div class="col-sm-7">
                <div class="row mt-2">
                    <label for="valorEmprestimo" class="col-sm-5">Valor do empréstimo</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="valorEmprestimo" name="valorEmprestimo" value="{{ old('valorEmprestimo') }}">
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="quantidadeParcela" class="col-sm-5">Quantidade de parcelas</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="quantidadeParcelas" name="quantidadeParcelas">
                </div>
                <div class="col-sm-7">
                        <button type="submit" class="btn btn-primary">Solicitar</button>
                    </div>
                </div>
            </div>
    </form>
</body>
</html>