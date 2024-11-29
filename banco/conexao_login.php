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

?>
