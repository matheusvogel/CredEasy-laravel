<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Login Creadeasy</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;
        700&family=Open+Sans:wght@300;400;700&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main-login">
            <form class="form-login" method="post" action="/login-cliente"> 
              @csrf      
              <h2 class="form-login-heading">LOGIN</h2>
                <input type="text" class="form-box" name="email" placeholder="Email" required/>
                <input type="password" class="form-box" name="senha" placeholder="Senha" required/>      
              <div> 
                <button class="btn-login" type="submit">Entrar</button>   
              </div>
              <div>
                <p class="register">Não possui uma conta?<a href="/cadastrar-cliente"> <b>Cadastre-se</b></a></p>
              </div>
              <div>
                <p class="recover"><a href="#">Esqueceu a senha?</a></p>
              </div>
            </form>
          </div>
    </body>
</html>