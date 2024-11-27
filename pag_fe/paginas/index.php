<!DOCTYPE html> <!-- define o documento como html -->
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"> <!-- baixa a fonte "Inter" do Google para ser usada -->
        <meta charset="utf-8"> <!-- define os caracteres como utf-8, para evitar problemas com sinais latinos -->
        <link rel="stylesheet" type="text/css" href="../estilo/style.css"> <!-- instancia o arquivo CSS -->
        <script type="text/javascript" src="script.js"></script> <!-- instancia o arquivo de scripts -->
        <title>O Ocultista Cinéfilo</title> <!-- o título do site -->
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1> <!-- letreiro no topo do site -->
        <h1 id="flip">O Ocultista Cinéfilo</h1> <!-- letreiro no topo do site que será invertido -->
        
        <ul> <!-- cria uma lista não ordenada, usada como menu -->
            <li><a href="index.php" id="inicio" style="background-color: #12151c">Início</a></li> <!-- link para página inicial -->
            <li><a href="sobre.php" id="sobre">Sobre</a></li>
            <li><a href="analises.php" id="analises">Análises</a></li>
            <li><a href="creditos.php" id="creditos">Créditos</a></li>
            <li><a href="noticias.php" id="noticias">Notícias</a></li>
            <li><a href="cadastro_filme.php" id="cadastro_filme">ADD Filmes</a></li>
            <li style="float:right"><a href="inscreva.php" id="inscreva">Inscreva-se</a></li> <!-- link para inscrição, alinhado à direita -->
        </ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo"> <!-- imagem do gatinho que aparece no site -->

        <div class="div_index"> <!-- div para criar um bloco editável -->
            <p>
                <h2>BEM VINDO À BOCA DO INFERNO CINEMATOGRÁFICA!</h2> <!-- texto de chamada do site -->

                Se você caiu aqui por acidente, ou precisava saber se aquele filme obscuro dos anos 30 era realmente bom,
                você - erroneamente - veio ao lugar certo.
                <br><br> <!-- pula duas linhas -->
                Pegue seu balde de pipoca, sua cópia do manifesto comunista e da Goetia e se prepare para chorar, meu gatito comunista.
            </p>
        </div>

        <!-- link para o gif que aparece na página inicial do site -->
        <iframe id="raposa" src="https://giphy.com/embed/aFEMFqZpDrkRy" width="234" height="380" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

    </body>
</html>
