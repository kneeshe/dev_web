<?php
include '../banco_dados/conexao.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../estilo/style.css">
        <script type="text/javascript" src="script.js"></script>
        <title>O Ocultista Cinefilo</title>
    </head>
    <body>
        <h1>O Ocultista Cinéfilo</h1>
        <h1 id="flip">O Ocultista Cinéfilo</h1>
        
        <ul>
        <li><a href="index.php" id="inicio"> Inicio </a></li>
        <li><a href="sobre.php" id="sobre"> Sobre </a></li>
        <li><a href="analises.php" id="analises" style="background-color: #12151c"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
        <li style="float:right"><a href="inscreva.php" id="inscreva"> Inscreva-se </a></li>
        </ul>

        <img id="gato" src="../imagens/gato_demon.jpg" alt="gato do demo">

        <?php
           $sql = "SELECT * FROM filme";
           $result = $conn->query($sql);
           
           if ($result->num_rows > 0) {
               echo "<table border='1'><tr><th>ID</th><th>Filme</th><th>Gênero</th><th>Diretor</th><th>Atores</th>
               <th>Data De Lançamento</th><th>Idade Indicada</th><th>Descrição</th></tr>";
               while($row = $result->fetch_assoc()) {
                   echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["id_genero_filme"] . "</td><td>" . $row["diretor"] . "</td><td>" . $row["autores"] . "</td>
                   <td>" . $row["data_lancamento"] . "</td><td>" . $row["id_idade_indicada"] . "</td><td>" . $row["descricao"] . "</td></tr>";
               }
               echo "</table>";
           } else {
               echo "0 resultados";
           }
           
           $conn->close();
        ?>

    </body>
</html>
