<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar conta CredEasy</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;
    700&family=Open+Sans:wght@300;400;700&family=Roboto&display=swap" rel="stylesheet">
<body>  
    <main class="container flex flex--coluna flex--centro">
        <div class="cadastro-cabecalho">
            <h1 class="cabecalho__titulo">Crie sua conta</h1>
        </div>
        <section class="cartao">
            <h2 class="cartao__titulo">Complete seu cadastro</h2>
            <form class="formulario flex flex--coluna" method="post" action="/clientes-salvos">
                @csrf
                <fieldset>
                    <legend class="formulario__legenda">Informações básicas</legend>
                    <div class="input-container">
                        <input name="nome" id="nome" class="input" type="text" placeholder="Nome e Sobrenome" minlength="4"
                        maxlength="255"required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                    <div class="input-container">
                        <input name="email" id="email" class="input" type="email" placeholder="Email" required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                    <div class="input-container">
                        <input name="senha" id="senha" class="input" type="password" placeholder="Senha" minlength="5" title="A senha deve conter 
                        pelo menos 5 caracteres." required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="formulario__legenda">Informações pessoais</legend>
                    
                    <div class="input-container">
                        <input name="cpf" id="cpf" class="input" type="text" placeholder="CPF"  autocomplete="off"
                        maxlength="14" required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                    <div class="input-container">
                        <input name="telefone" id="telefone" class="input" type="text" placeholder="Telefone celular"
                        autocomplete="off" minlength="15" maxlength="15" required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                    <div class="input-container">
                        <input name="profissao" id="profissao" class="input" type="text" placeholder="Profissão"  autocomplete="off"
                        maxlength="255" required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                    <div class="input-container">
                        <input name="renda" id="renda" class="input" type="text" placeholder="Renda"
                        autocomplete="off" required>
                        <span class="input-mensagem-erro"></span>
                    </div>    
                    <div class="input-container">
                        <input name="endereco" id="endereco" class="input" type="text" placeholder="Endereço"
                        autocomplete="off" required>
                        <span class="input-mensagem-erro"></span>
                    </div>
                </fieldset>
                    <div>
                        <p class="register">Já possui uma conta?<a href="/login-cliente"> <b>Faça seu login</b></a></p>
                    </div>
                <button type="submit" class="botao">Cadastrar</a>
            </form>
        </section>
    </main>
    <script src="../js/mascaras.js" type="text/javascript"></script>
    <script src="../js/app.js" type="module"></script>
</body>
</html>