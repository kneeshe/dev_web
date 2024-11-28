<!DOCTYPE html> <!-- define o documento como html --> 

<html> 
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> <!--baixa a fonte "inter" do google para ser usada -->
        <meta charset="utf-8"> <!-- define os caracteres como utf-8, para evitar problemas com sinais latinos -->
        <link rel="stylesheet" type="text/css" href="../estilo/style.css"> <!-- instancia o arquivo css -->
        <script type="text/javascript" src="../javascript/script.js"></script> <!-- instancia o arquivo de scripts -->
        <title>O Ocultista Cinefilo</title> <!-- o titulo do site -->
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1> <!-- letreiro no topo do site -->
        <h1 id="flip">O Ocultista Cinéfilo</h1> <!-- letreiro no topo do site que sera invertido -->
        
        <ul> <!-- cria uma lista não ordenada. nesse caso foi usado para criar o menu do site -->
        <li><a href="index.php" id="inicio" style="background-color: #12151c"> Inicio </a></li> <!-- cada um dos links que levarão para outras paginas do site -->
        <li><a href="sobre.php"id="sobre"> Sobre </a></li>
        <li><a href="tabela_bd.php" id="analises"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
	<li style="float:right"><a href="inscreva.php" id="inscreva"> Inscreva-se </a></li> <!-- esse link foi estilizado para ficar a direita na pagina do site -->
	<li><a href="cadastro_filme.php" id="cadastro_filme">Cadastro de filmes</a></li>
        </ul> 

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo"> <!-- imagem do gatinho que aparece no site -->

        <!-- link para o gif que aparece na pagina inicial do site -->
        <iframe id="raposa" src="https://giphy.com/embed/aFEMFqZpDrkRy" width="234" height="380" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

	<div class="seletor" style="width: 200px;">
		<select>
			<option value="seleciona">Selecione o genero: </option>
			<option value="comedia">comedia</option>
			<option value="terror">terror</option>
		</select>
	</div>



    </body>
</html>
