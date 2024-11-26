<?php
include '../banco/conexao_banco.php';

$genero = $conn->query("SELECT id, genero FROM genero_filme");
$idade = $conn->query("SELECT id, idade FROM idade");
?>

<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/style.css">
        <script type="text/javascript" src="script.js"></script>
        <title>O Ocultista Cinéfilo</title>
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>

        <ul>
            <li><a href="index.php" id="inicio">Início</a></li>
            <li><a href="sobre.php" id="sobre">Sobre</a></li>
            <li><a href="analises.php" id="analises">Análises</a></li>
            <li><a href="creditos.php" id="creditos">Créditos</a></li>
            <li><a href="noticias.php" id="noticias">Notícias</a></li>
            <li><a href="cadastro_filme.php" id="cadastro_filme" style="background-color: #12151c">ADD Filmes</a></li>
            <li style="float:right"><a href="inscreva.php" id="inscreva">Inscreva-se</a></li>
        </ul>

        <img id="gato" src="../imagens/gato_demon.jpg" alt="gato do demo">

        <div class="div_formulario">
            <h2 style="color:white">Cadastre um novo filme</h2>
            <form action="processo_filme.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="genero">Gênero</label>
                    <select class="form-control" id="genero" name="genero" required>
                        <option value="">Selecione um gênero</option>
                        <?php while ($row = $genero->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['genero']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="diretor">Diretor</label>
                    <input type="text" class="form-control" id="diretor" name="diretor" required>
                </div>
                <div class="form-group">
                    <label for="autores">Atores</label>
                    <input type="text" class="form-control" id="autores" name="autores" required>
                </div>
                <div class="form-group">
                    <label for="data">Data de Lançamento</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="idade">Faixa etária indicada</label>
                    <select class="form-control" id="idade" name="idade" required>
                        <option value="">Selecione uma idade</option>
                        <?php while ($row = $idade->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['idade']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea rows="5" cols="50" id="descricao" name="descricao"></textarea>
                </div>
                <div class="form-group">
                    <label for="arquivo">Imagem do Filme</label>
                    <input type="file" name="arquivo" id="arquivo" accept="image/jpeg, image/png, image/gif">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </body>
</html>
