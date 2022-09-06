<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Área do Cliente - CredEasy</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style-cliente.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container">
        <a class="navbar-brand fonte-titulo" href="#">CREDEASY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li><a class="nav-item nav-link active fonte-navbar" href="#fale com a gente">Fale com a gente <span class="sr-only">(current)</span></a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="#sobre">Sobre</a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="#creditos">Créditos</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-item nav-link active fonte-navbar" href="#">Olá, {{ $cliente->nome }}!</a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="/login-cliente">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="topicos pt-5 color">
      <div class="container text-center">
        <div class="row">
          <div class="col pt-4 pb-5">
            <div class="card borda-cor-especial" style="width: 68rem;">
              <div class="card-body">
                <a href="/cadastrar-emprestimo" class="btn btn-light fonte-botao">S O L I C I T A R &nbsp; E M P R É S T I M O</a>
              </div>
            </div>
          </div>
          </p>
          <div class="container text-center">
            <div class="row">
              <div class="col pb-5">
                <div class="card" style="width: 68rem;">
                  <div class="card-body">
                    <a href="/listar-emprestimos" class="btn btn-light fonte-botao">M E U S &nbsp; E M P R É S T I M O S</a>
                  </div>
                </div>
              </div>
              </p>
              <div class="container text-center">
                <div class="row">
                  <div class="col pb-5">
                    <div class="card" style="width: 68rem;">
                      <div class="card-body">
                        <a href="#" class="btn btn-light fonte-botao">F A Z E R &nbsp; A N A L I S E</a>
                      </div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                </div>
              </div>
      </section>
  </main>
  <footer class="footer-custom p-3 justify-content-center">
    <div class="container pt-2 pb-2">
      <div class="row">
        <div class="col text-light fonte-footer pt-2">CredEasy Soluções Financeira © 2017<br>
          Todos direitos reservados CNPJ: n° xx.xxx.xxx/xxxx-xx<br>
          Rua. Sete de Setembro, 374 - Nova Petrópolis, RS, 95150-000</div>
        <div class="col text-light fonte-footer-redes">SIGA A CREDEASY
          <a class="bi text-light bi-facebook pl-3 pr-2 icones-redes" href="https://www.facebook.com" target="_blank" style="font-size: 1.7rem;"></a>
          <a class="bi text-light bi-instagram pr-2 icones-redes" href="https://www.instagram.com" target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-twitter pr-2 icones-redes" href="https://twitter.com" target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-whatsapp pr-2 icones-redes" href="https://whatsapp.com" target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-linkedin pr-2 icones-redes" href="https://br.linkedin.com" target="_blank" style="font-size: 1.7rem"></a>
        </div>
        <div class="w-100"></div>
        <div class="col pb-3"></div>
      </div>
    </div>
  </footer>
</body>

</html>