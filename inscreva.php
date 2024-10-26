<!DOCTYPE html>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="script.js"></script>
        <title>O Ocultista Cinefilo</title>
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>
        
        <ul>
        <li><a href="index.php" id="inicio"> Inicio </a></li>
        <li><a href="sobre.php" id="sobre"> Sobre </a></li>
        <li><a href="analises.php" id="analises"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
        <li style="float:right"><a href="inscreva.php" id="inscreva" style="background-color: #12151c"> Inscreva-se </a></li>
        </ul>

        <img id="gato" src="demo_gato.jpg" alt="gato do demo">

        <h2 style="color:white">Quer receber noticias, informações e atualizações? Se inscreva na nossa Newsletter Vermelha: </h2>

        <form class="form_inscricao">
            <p><label for="nome">Nome: </label><input type="text" id="nome" placeholder="Aqui você coloca seu nome :)"></p>

            <p><label for="email">Email: </label><input type="text" id="email" placeholder="Digite seu email aqui :)"></p>

            <p><label for="menino">És boy?</label><input type="radio" id="menino" name="selecao">
              <label for="menina">ou És boya?</label><input type="radio" id="menina" name="selecao"></p>

            <p>Fale um pouco sobre você:</p>
            <p><textarea rows="5" cols="50"></textarea></p>
            <br>

            <h3>Deseja receber informações e ofertas de nossos patrocinadores?</h3>
            <p><input type="radio" id="sim" name="oferta"><label for="sim"> Sim, quero</label></p>
            <p><input type="radio" id="nao" name="oferta"><label for="nao"> Não, não quero</label></p>
        </form>

    </body>
</html>
