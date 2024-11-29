<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../estilo/loginStyle.css" />
    <link rel="shortcut icon" href="../imagens/cat-icon.png" type="image/x-icon"> <!--Adicionando icone de favoritos-->
  </head>
  <body>
    <img src="../imagens/back.gif"/> <!--Adicionando Gif animado ao background-->
    <div class="login-box">
      <div class="titulo"> <!--Adicionando Titulo na box de login-->
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>
      </div>
      <form id="loginForm" action="../banco/loginConsulta.php" method="POST">  <!--Criando forms da box de login-->
        <div class="user-box">
          <input type="text" id="usuario" name="usuario" required /> <!--Campo de usuário-->
          <label for="usuario">Usuário</label>
        </div>
        <div class="user-box">
          <input type="password" id = "senha" name="senha" required /> <!--Campo de senha-->
          <label for="senha">Senha</label>
        </div>
        <!--Botão que ao receber um click, executará uma ação(aceitar ou negar informações)-->
        <input type="submit" name="submit" class="botao-entrar" value="Entrar"></input>
      </form>
    </div>
  </body>
</html>
