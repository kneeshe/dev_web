<?php

include '../banco/conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $diretor = $_POST['diretor'];
    $autores = $_POST['autores'];
    $data = $_POST['data'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];

    $stmt = $conn->prepare("INSERT INTO filme (nome, id_genero, diretor, autores, data_lancamento, id_idade, descricao) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nome, $genero, $diretor, $autores, $data, $idade, $descricao);

    if ($stmt->execute()) {
	    header('Location:../paginas/cadastro_filme.php');
	    exit();
    } else {
        echo "Erro ao cadastrar Filme: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de requisição inválido.";
}

?>
