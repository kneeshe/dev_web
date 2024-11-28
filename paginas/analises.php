<?php
include '../banco/conexao_banco.php';
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
            <li><a href="creditos.php" id="creditos">Créditos</a></li>
	    <li><a href="analises.php" id="analises" style="background-color: #12151c">Análises</a></li>
            <li><a href="noticias.php" id="noticias">Notícias</a></li>
            <li style="float:right"><a href="inscreva.php" id="inscreva">Inscreva-se</a></li>
        </ul>

        <div class="div_fil">
            <?php
                $sql = "SELECT f.*, g.genero, i.idade 
                        FROM filme f
                        JOIN genero_filme g ON f.id_genero_filme = g.id
                        JOIN idade i ON f.id_idade_indicada = i.id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='filme'>";
                        echo "<h2>" . htmlspecialchars($row["nome"]) . "</h2>";
                        echo "<p>Gênero: " . htmlspecialchars($row["genero"]) . "</p>";
                        echo "<p>Diretor: " . htmlspecialchars($row["diretor"]) . "</p>";
                        echo "<p>Atores: " . htmlspecialchars($row["autores"]) . "</p>";
                        echo "<p>Data de Lançamento: " . htmlspecialchars(date('d/m/Y', strtotime($row["data_lancamento"]))) . "</p>";
                        echo "<p>Idade Indicada: " . htmlspecialchars($row["idade"]) . "</p>";
                        echo "<p>Comentário: " . nl2br(htmlspecialchars($row["descricao"])) . "</p>";

                        if (!empty($row["imagem"])) {
                            echo "<img src='../uploads/" . htmlspecialchars($row["imagem"]) . "' alt='Imagem do Filme' style='width: 200px; height: auto;'>";
                        } else {
                            echo "<p>Imagem não disponível.</p>";
                        }

                        echo "</div>";
                    }
                } else {
                    echo "<p>Não há filmes cadastrados.</p>";
                }

                $conn->close();
            ?>
        </div>
        
        <footer> . </footer>

    </body>
</html>
