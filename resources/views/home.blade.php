<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CreadEasy</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style-home.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand fonte-titulo" href="#">CREDEASY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li><a class="nav-item nav-link active fonte-navbar" href="#fale com a gente">Fale com a gente <span
                  class="sr-only">(current)</span></a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="#sobre">Sobre</a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="#creditos">Créditos</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-item nav-link active fonte-navbar" href="/login-cliente">Entrar</a></li>
            <li><a class="nav-item nav-link active fonte-navbar" href="/cadastrar-cliente">Cadastrar</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="carrossel">
      <div id="carouselExampleCaptions" class="carousel slide" data-interval="4000" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/mulheres-surpresas.jpg" class="d-block w-100 imagem-carrosel-1" alt="...">
            <div class="carousel-caption d-none d-md-block h-50">
              <h1 class="display-4 fonte-carrosel">Opções de crédito feitas para você.</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/mulher-trabalho.jpg" class="d-block w-100 imagem-carrosel-2" alt="...">
            <div class="carousel-caption d-none d-md-block h-50">
              <h1 class="display-4 fonte-carrosel">Simplifique sua vida. Seja CredEasy!</h1>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>

    <section id="titulo">
      <h2 class="text-center pt-5 fonte-titulo-grande">Venha fazer parte do nosso time!</h2>
      <p class="text-center text-secondary pb-4 fonte-subtitulo">Faça investimentos inteligentes para seu futuro</p>
      <p class="text-center pt-3 pb-2 fonte-titulo-pequeno">Linhas de crédito</p>
    </section>

    <section class="container-fluid bg-light" id="creditos">
      <div class="row  justify-content-center">


        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-pessoal.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO PESSOAL</h5>
            <p class="card-text fonte-subtitulo">Esta modalidade de crédito coopera para que você
              possa pagar suas contas, antecipar planos e realizar seus sonhos.</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-habitacional.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO HABITACIONAL</h5>
            <p class="card-text fonte-subtitulo">Modalidade que apoia você a adquirir e construir seu imóvel residencial
              novo ou usado ou portar seu financiamento de outra instituição para a CredEasy.</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-automotivo.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO AUTOMOTIVO</h5>
            <p class="card-text fonte-subtitulo">LInha de crédito destinado a associados, pessoas físicas e jurídicas,
              para aquisição de veículos novos
              e usados, nacionais ou importados e com até 10 anos de fabricação.</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-consolidado.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO CONSOLIDADO</h5>
            <p class="card-text fonte-subtitulo">Linha de crédito que permite acumular várias prestações numa só.
              Engloba-se parte ou todos os
              créditos num único novo crédito do qual resulta uma única prestação de valor reduzido</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-educacao.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO EDUCAÇÃO</h5>
            <p class="card-text fonte-subtitulo">Com o objetivo de cooperar e, juntos, investir no crescimento do
              associado e de sua família,
              a CredEasy disponibiliza a linha de crédito Educação.</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
        <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-5">
          <img src="../img/credito-agronegocio.jpg" class="card-img-top card-posicao-imagem" alt="...">
          <div class="card-body">
            <h5 class="card-title fonte-linhas-credito">CRÉDITO AGRONEGÓCIO</h5>
            <p class="card-text fonte-subtitulo">Linha de crédito para as despesas de produção das
              atividades agrícolas e pecuárias do seu negócio</p>
            <a href="#" class="btn btn-light botao-cor-especial fonte-botao">Solicitar</a>
          </div>
        </article>
      </div>
    </section>
    <section class="titulo-banner" id="sobre">
      <p class="text-center pt-5 fonte-titulo-pequeno">Sobre nós</p>
      <h4 class="text-center pt-3 fonte-titulo-grande">SOMOS A PLATAFORMA DIGITAL LÍDER DE PRODUTOS DE CRÉDITO E
        SOLUÇÕES NA AMÉRICA LATINA
      </h4>
      <p class="text-center text-secondary pb-5 pt-2 fonte-subtitulo">Desde 2017, carregamos nossa missão de unir
        tecnologia e experiência
        financeira das pessoas, além de ajudá-las a gerir melhor seu próprio dinheiro. <br>Nosso modelo de negócio
        constrói uma cadeia
        de valor que beneficia o associado, a cooperativa e a comunidade local. </p>
    </section>
    <section class="sobre">
      <div class="container pt-4 pb-5">
        <div class="row">
          <div class="col display-4 fonte-titulo-grande">Há mais de 5<br>anos fazendo e<br>crescendo<br>juntos</div>
          <div class="col fonte-subtitulo">Somos a CredEasy e optamos por trilhar um caminho coletivo para fornecer
            soluções inteligentes para o
            seu desenvolvimento financeiro. Entendemos que as melhores escolhas são aquelas que trazem resultados para
            todos.
            Oferecemos a você, sua empresa e seu agronegócio mais de 80 produtos e serviços financeiros de forma simples
            e otimizada.
            Mas o que nos diferencia é que, ao entrar, você obtém uma pequena parte da cooperativa, se torna o
            proprietário da
            CredEasy, tem voz nas decisões de negócios e participa do resultado. É por isso que o CredEasy é sua, minha
            e nossa.
            Aqui, todos têm a oportunidade de tomar decisões e participar, construindo laços de confiança que nos
            permitem crescer. Juntos.</div>
          <div class="w-100"></div>
        </div>
      </div>
      <div class="container pt-5 pb-5 text-center">
        <div class="row">
          <div class="col">
            <h3 class="numeros">12,5</h3>
            <p class="text-secondary fonte-subtitulo"><strong>bilhões</strong><br>patrimônio líquido
          </div>
          </p>
          <div class="col">
            <h3 class="numeros">146,2</h3>
            <p class="text-secondary fonte-subtitulo"><strong>bilhões</strong><br>ativos
          </div>
          </p>
          <div class="col">
            <h3 class="numeros">93,8</h3>
            <p class="text-secondary fonte-subtitulo"><strong>bilhões</strong><br>saldo da carteira de<br>crédito
          </div>
          </p>
          <div class="col">
            <h3 class="numeros">87,4</h3>
            <p class="text-secondary fonte-subtitulo"><strong>bilhões</strong><br>depósitos totais
          </div>
          </p>
          <div class="w-100"></div>
        </div>
      </div>
    </section>
    <section class="Fale conosco" id="fale com a gente">
      <p class="text-center pt-3 fonte-titulo-pequeno">Fale com a gente</p>
      <form>
        <div class="form-group mx-sm-3 mb-2">
          <label for="exampleFormControlInput1">Nome</label>
          <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
        </div>
         <div class="form-group mx-sm-3 mb-2">
          <label for="exampleFormControlInput1">E-mail</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="nome@exemplo.com">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="exampleFormControlSelect1">Assunto</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Dúvidas</option>
            <option>Problemas na plataforma</option>
            <option>Problemas com minha conta</option>
            <option>Outros...</option>
          </select>
        </div>
        <div class="form-group mx-sm-3 mb-2 pb-3">
          <label for="exampleFormControlTextarea1">Comentário</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Enviar relátorio</button>
        <div class="form-group mx-sm-3 mb-2 pt-5"></div>
      </form>
    </section>
  </main>
  <footer class="footer-custom p-3 justify-content-center">
    <div class="container pt-2 pb-2">
      <div class="row">
        <div class="col text-light fonte-footer pt-2">CredEasy Soluções Financeira © 2017<br>
          Todos direitos reservados CNPJ: n° xx.xxx.xxx/xxxx-xx<br>
          Rua. Sete de Setembro, 374 - Nova Petrópolis, RS, 95150-000</div>
        <div class="col text-light fonte-footer-redes">SIGA A CREDEASY
          <a class="bi text-light bi-facebook pl-3 pr-2 icones-redes"
            href="https://www.facebook.com" target="_blank" style="font-size: 1.7rem;"></a>
          <a class="bi text-light bi-instagram pr-2 icones-redes"
            href="https://www.instagram.com" target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-twitter pr-2 icones-redes"
            href="https://twitter.com" target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-whatsapp pr-2 icones-redes" href="https://whatsapp.com"
            target="_blank" style="font-size: 1.7rem"></a>
          <a class="bi text-light bi-linkedin pr-2 icones-redes" href="https://br.linkedin.com"
            target="_blank" style="font-size: 1.7rem"></a>
        </div>
        <div class="w-100"></div>
        <div class="col pb-3"></div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>