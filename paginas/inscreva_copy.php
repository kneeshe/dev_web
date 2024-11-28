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
	<li><a href="creditos.php" id="creditos">Créditos</a></li> 
	<li><a href="analises.php" id="analises"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
        <li style="float:right"><a href="inscreva.php" id="inscreva" style="background-color: #12151c"> Inscreva-se </a></li>
        </ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo">
        <h2 style="color:white">Quer receber noticias, informações e atualizações? Se inscreva na nossa Newsletter Vermelha: </h2>
	
    
        <div id="inscreva" class="inscreva">
          <form id="form_inscricao" class="form_inscricao" method="POST" action="../banco/conexao.php" onclick="valida_entrada()"> <!-- formulario para validar os dados e envia-los para o banco de dados -->
		
		
		<p><div id="insc_nome">Nome:<input type="text" id="nome" name="nome" placeholder="Aqui você coloca seu nome :)"></div> <!-- entrada de nome inseria pelo usuario -->
                <span id="erro_nome" class="mensagem_erro"></span> <!-- essa tag fica invisivel ate que a função de validação a chame, caso ocorra algum erro no input do usuario -->
            </p>
	   
		<div id="insc_email"><p>Email: <input type="text" id="email" name="email" placeholder="Digite seu email aqui :)"></div> <!-- mesmo caso citado acima, porem para emails -->
                <span id="erro_email" class="mensagem_erro"></span>
	    </p>
		
<div id="insc_genero"><p>És boy?<input type="radio" id="genero" name="genero" value="menino"> <!-- cria um mini menu para o usuario escolher a qual genero se identifica -->
               ou És boya?<input type="radio" id="genero" name="genero" value="menina"></div>
              <span id="erro_genero" class="mensagem_erro"></span>
            </p>

		<div id="insc_text"><p>Fale um pouco sobre você:</p><!-- caixa de texto para o usuario falar de si -->
            	<p><textarea rows="5" cols="50" id="comentario" name="comentario"></textarea></div>
                <span id="erro_comentario" class="mensagem_erro"></span>
	    </p>
            <br>

		<h3>Deseja receber informações e ofertas de nossos patrocinadores?</h3><!-- pergunta se o usuario deseja receber noticias dos patrocinadores do site -->
            <td><p><input type="radio" id="oferta" name="oferta" value="sim"> Sim, quero <!-- ele pode aceitar ou recusar -->
              <br>
            <input type="radio" id="oferta" name="oferta" value="nao"> Não, não quero
              <span id="erro_oferta" class="mensagem_erro"></span>
	    </p>
		<div id="insc_botao"><p><input type="submit" value="Enviar" id="submit" name="submit"></p></div><!-- botão que envia os dados do input para a função do js e o script do php -->
	</form>
	</div>

    <footer> . </footer>

    </body>
</html>

<?php

//dados de conexão ao banco 
$hostname = "localhost"; //variavel com o nome do servidor - como é local, o servidor é o localhost
$banco_dados = "dev_web_db"; //variavel com o nome do banco de dados a ser conectado
$user = "root"; //variavel com o nome de usuario de conexão ao banco de dados  - por padrão, é root 
$passwd = ""; //variavel com a senha do banco - por padrão, é vazia

$mysql = new mysqli($hostname, $user, $passwd, $banco_dados); //efetua a conexão com o banco 

if($mysql -> connect_errno) { //verifica se a conexão foi bem sucedida. se houve erro, retorna a mensagem de erro 
  echo "erro" . $mysql -> connect_errno;
}
else { //se a conexão foi ok, segue com o processo de captura dos dados pelo metodo post 
  if(isset($_POST["submit"])){ //verifica se há o metodo post atraves do submit do botão 

    $nome = $_POST["nome"]; //associa a entrada nome no form a variavel nome no php 
    $email = $_POST["email"]; //mesmo do acima, mas com a variavel email
    $genero = $_POST["genero"];
    $comentario = $_POST["comentario"];
    $oferta = $_POST["oferta"];

    //os codigos abaixo fazem a verificação se as entradas estão corretas antes de adicionar ao banco de dados
    if($nome === "") {
      echo "Proibido valor vazio em Nome";
      exit(1);
    }
    
    else if($email === "") {
      echo "Proibido valor vazio em Email";
      exit(1);
    }

    else if($comentario === "") {
      echo "Proibido valor vazio em Comentario";
      exit(1);
    }

    else if(!isset($genero)) { //verifica se houve um retorno de valor da seleção de genero 
      echo "Proibido valor vazio em Gênero";
      exit(1);
    }

    else if(!isset($oferta)) { //verifica se houve um retorno de valor da seleção de oferta 
      echo "Proibido valor vazio em Ofertas";
      exit(1);
    }

    else { //caso nada seja barrado pelos verificadores, o codigo faz a inserção dos dados no banco de dados 
    //variavel para fazer a inserção de dados na tabela    
    $insere_dados = "INSERT INTO `cadastro`(`nome`, `email`, `comentario`, `genero`, `oferta`) VALUES ('$nome','$email','$comentario','$genero','$oferta')";
    $result = mysqli_query($mysql, $insere_dados); //faz a verificação do banco e executa a variavel de inserção
    }
	header('Location: http://localhost/dev_web/paginas/inscreva.php');
    	exit;
  }
} 

?>