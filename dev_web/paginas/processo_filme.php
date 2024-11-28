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

    $diretorio_destino = '../uploads/';

    // Cria o diretório caso não exista
    if (!is_dir($diretorio_destino)) {
        mkdir($diretorio_destino, 0777, true);
    }

    $nome_arquivo = "";

    // Verifica se há arquivo sendo enviado
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == UPLOAD_ERR_OK) {
        // Tipos de arquivo permitidos
        $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['arquivo']['type'], $tipos_permitidos)) {
            echo "Tipo de arquivo não permitido. Somente arquivos JPG, PNG e GIF são aceitos.";
            exit;
        }

        // Verifica o tamanho do arquivo (máximo de 5MB)
        if ($_FILES['arquivo']['size'] > 5 * 1024 * 1024) {
            echo "O arquivo é muito grande. O tamanho máximo permitido é 5MB.";
            exit;
        }

        // Gera um nome único para o arquivo
        $nome_arquivo_original = $_FILES['arquivo']['name'];
        $nome_arquivo = time() . '_' . basename($nome_arquivo_original);

        // Caminho completo do arquivo no diretório de destino
        $arquivo_temp = $_FILES['arquivo']['tmp_name'];
        $caminho_destino = $diretorio_destino . $nome_arquivo;

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($arquivo_temp, $caminho_destino)) {
            echo "Arquivo enviado com sucesso!";
	        echo '<br>';
		    header('Location: http://localhost/dev_web/paginas/cadastro_filme.php');
        } else {
            echo "Erro ao enviar o arquivo.";
            exit;
        }
    } else {
        echo "Nenhum arquivo enviado ou erro no upload.";
    }

    // Usando prepared statements para evitar SQL Injection
    $sql = $conn->prepare("INSERT INTO filme (nome, id_genero_filme, diretor, autores, data_lancamento, id_idade_indicada, descricao, imagem)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssssss", $nome, $genero, $diretor, $autores, $data, $idade, $descricao, $nome_arquivo);

    if ($sql->execute()) {
	    echo "Filme cadastrado com sucesso!";
	    header('Location: http://localhost/dev_web/paginas/cadastro_filme.php');
	    exit;

    } else {
        echo "Erro ao cadastrar filme: " . $sql->error;
    }

    $sql->close();
    $conn->close();
    header('Location: http://localhost/dev_web/paginas/cadastro_filme.php');
} else {
    echo "Método de requisição inválido.";
}
?>
