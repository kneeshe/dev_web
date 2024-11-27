<?php

//esse é um arquivo de testes para verificar se o metodo post estava funcionando no formulario

$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];
$genero = $_POST["genero"];
$oferta = $_POST["oferta"];

if(isset($_POST["submit"])) {

  echo $nome;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $comentario;
  echo "<br>";
  echo $genero;
  echo "<br>";
  echo $oferta;
}

else{
  echo "erro";
}

?>
