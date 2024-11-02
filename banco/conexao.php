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
