<!DOCTYPE html>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/style.css">
        <script type="text/javascript" src="../estilo/script.js"></script>
        <title>O Ocultista Cinefilo</title>
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>
        
        <ul>
        <li><a href="index.php" id="inicio"> Inicio </a></li>
        <li><a href="sobre.php" id="sobre"> Sobre </a></li>
        <li><a href="tabela_bd.php" id="analises"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
        <li style="float:right"><a href="inscreva.php" id="inscreva" style="background-color: #12151c"> Inscreva-se </a></li>
        </ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo">

        <h2 style="color:white">Quer receber noticias, informações e atualizações? Se inscreva na nossa Newsletter Vermelha: </h2>
	
          <form id="form_inscricao" class="form_inscricao" method="POST" action="../banco/conexao.php"> <!-- formulario para validar os dados e envia-los para o banco de dados -->
		

		<p>Nome: <input type="text" id="nome" name="nome" placeholder="Aqui você coloca seu nome :)"> <!-- entrada de nome inseria pelo usuario -->
                <span id="erro_nome" class="mensagem_erro"></span> <!-- essa tag fica invisivel ate que a função de validação a chame, caso ocorra algum erro no input do usuario -->
            </p>
	   
		<p>Email: <input type="text" id="email" name="email" placeholder="Digite seu email aqui :)"> <!-- mesmo caso citado acima, porem para emails -->
                <span id="erro_email" class="mensagem_erro"></span>
	    </p>
		
<p>És boy?<input type="radio" id="genero" name="genero" value="menino"> <!-- cria um mini menu para o usuario escolher a qual genero se identifica -->
               ou És boya?<input type="radio" id="genero" name="genero" value="menina">
              <span id="erro_genero" class="mensagem_erro"></span>
            </p>

		<p>Fale um pouco sobre você:</p><!-- caixa de texto para o usuario falar de si -->
            	<p><textarea rows="5" cols="50" id="comentario" name="comentario"></textarea>
                <span id="erro_comentario" class="mensagem_erro"></span>
	    </p>
            <br>

		<h3>Deseja receber informações e ofertas de nossos patrocinadores?</h3><!-- pergunta se o usuario deseja receber noticias dos patrocinadores do site -->
            <td><p><input type="radio" id="oferta" name="oferta" value="sim"> Sim, quero <!-- ele pode aceitar ou recusar -->
              <br>
            <input type="radio" id="oferta" name="oferta" value="nao"> Não, não quero
              <span id="erro_oferta" class="mensagem_erro"></span>
	    </p>
		<p><input type="submit" value="Enviar" id="submit" name="submit"></p><!-- botão que envia os dados do input para a função do js e o script do php -->
	</form>
    </body>
</html>
