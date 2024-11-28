<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/style.css">
        <script type="text/javascript" src="script.js"></script>
        <title>O Ocultista Cinéfilo</title>
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>

        <ul>
            <li><a href="index.php" id="inicio">Inicio</a></li>
            <li><a href="sobre.php" id="sobre">Sobre</a></li>
            <li><a href="analises.php" id="analises">Análises</a></li>
            <li><a href="creditos.php" id="creditos">Créditos</a></li>
            <li><a href="noticias.php" id="noticias">Notícias</a></li>
            <li><a href="cadastro_filme.php" id="cadastro_filme">ADD Filmes</a></li>
            <li style="float:right">
                <a href="inscreva.php" id="inscreva" style="background-color: #12151c;">Inscreva-se</a>
            </li>
        </ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo">

        <h2 style="color:white;">
            Quer receber notícias, informações e atualizações? Se inscreva na nossa Newsletter Vermelha:
        </h2>

        <form id="form_inscricao" class="form_inscricao" method="POST" action="conexao.php">
            <p>
                Nome: 
                <input type="text" id="nome" name="nome" placeholder="Aqui você coloca seu nome :)">
                <span id="erro_nome" class="mensagem_erro"></span>
            </p>

            <p>
                Email: 
                <input type="text" id="email" name="email" placeholder="Digite seu email aqui :)">
                <span id="erro_email" class="mensagem_erro"></span>
            </p>

            <p>
                És boy?
                <input type="radio" id="genero" name="genero" value="menino">
                ou És boya?
                <input type="radio" id="genero" name="genero" value="menina">
                <span id="erro_genero" class="mensagem_erro"></span>
            </p>

            <p>Fale um pouco sobre você:</p>
            <p>
                <textarea rows="5" cols="50" id="comentario" name="comentario"></textarea>
                <span id="erro_comentario" class="mensagem_erro"></span>
            </p>
            <br>

            <h3>Deseja receber informações e ofertas de nossos patrocinadores?</h3>
            <p>
                <input type="radio" id="oferta" name="oferta" value="sim"> Sim, quero
                <br>
                <input type="radio" id="oferta" name="oferta" value="nao"> Não, não quero
                <span id="erro_oferta" class="mensagem_erro"></span>
            </p>

            <p>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </p>
        </form>
    </body>
</html>
