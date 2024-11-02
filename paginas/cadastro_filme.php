<?php
include '../banco/conexao_banco.php';

$genero = $conn->query("SELECT id_genero, genero FROM genero_filme");
$idade = $conn->query("SELECT id_idade, idade FROM idade");

?>

<!DOCTYPE html>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/style.css">
        <script type="text/javascript" src="../javascript/script.js"></script>
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
        <li style="float:right"><a href="inscreva.php" id="inscreva"> Inscreva-se </a></li>
	<li><a href="cadastro_filme.php" id="cadastro_filme" style="background-color: #12151c">Cadastro de filmes</a></li>
	</ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo">

        <h2 style="color:white">Cadastre um novo filme</h2>
        <form class="cadastro_filme" action="processo_filme.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero: </label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="">Selecione um genero</option>
                    <?php while ($row = $genero->fetch_assoc()): ?>
                        <option value="<?php echo $row['id_genero']; ?>"><?php echo $row['genero']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="diretor">Diretor: </label>
                <input type="text" class="form-control" id="diretor" name="diretor" required>
            </div>
            <div class="form-group">
                <label for="autores">Atores: </label>
                <input type="text" class="form-control" id="autores" name="autores" required>
            </div>
            <div class="form-group">
                <label for="data">Data de lançamento: </label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="form-group">
                <label for="idade">Faixa etária: </label>
                <select class="form-control" id="idade" name="idade" required>
                    <option value="">Selecione uma idade</option>
                    <?php while ($row = $idade->fetch_assoc()): ?>
                        <option value="<?php echo $row['id_idade']; ?>"><?php echo $row['idade']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <p>Análise do filme: </p><textarea rows="5" cols="50" id="descricao" name="descricao"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </body>
</html>
