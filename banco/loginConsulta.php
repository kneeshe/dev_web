<?php

if (isset($_POST['usuario'], $_POST['senha'])) {
    // Processar o login
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    include_once('../banco/conexao_login.php'); // Usando barras normais

    $sql = "SELECT * FROM tb_login WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $mysql->query($sql);

    if (!$result) {
        // Erro na execução da consulta
        echo "<script>alert('Erro ao executar a consulta: " . addslashes($mysql->error) . "');</script>";
        exit;
    }

    $rows = $result->fetch_all(MYSQLI_ASSOC);
    if (empty($rows)) {
        // Nenhum usuário encontrado
        echo "<script>
                alert('Usuário ou senha incorretos!');
                window.location.href = '../paginas/login.php';
              </script>";
        exit; // Interrompe a execução para evitar redirecionamento duplo
    }

    // Se chegou aqui, o login foi bem-sucedido
    echo "<script>
            alert('Usuário logado com sucesso!');
            window.location.href = '../paginas/cadastro_filme.php';
          </script>";
    exit;
} else{
    echo "<script>
            alert('Falha ao manter conexão com banco, tente novamente!');
            window.location.href = '../paginas/login.php';
          </script>";
}

?>
