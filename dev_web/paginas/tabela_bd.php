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
        <li><a href="tabela_bd.php" id="analises" style="background-color: #12151c"> Análises </a></li>
        <li><a href="noticias.php" id="noticias"> Notícias </a></li>
        <li style="float:right"><a href="inscreva.php" id="inscreva"> Inscreva-se </a></li>
	</ul>

        <img id="gato" src="../imagens/demo_gato.jpg" alt="gato do demo">
		
	<table class="tabela_banco">
		<tr class="tr_banco">
			<th class="th_banco">Filme</th>
			<th class="th_banco">Gênero</th>
			<th class="th_banco">Diretor</th>
			<th class="th_banco">Atores</th>
			<th class="th_banco">Data de lançamento</th>
			<th class="th_banco">Faixa etária</th>
			<th class="th_banco">Análise</th>
		</tr>


        <?php
		$conn = new mysqli('localhost', 'root', '', 'dev_web_db');
		$query = "SELECT * FROM filme";
		$result = mysqli_query($conn, $query);

	if ($result->num_rows > 0) {
               while($row = mysqli_fetch_assoc($result)) {
		       echo "<tr class='tr_banco'>
			       	<td class='td_banco'>".$row["nome"]."</td>
				<td class='td_banco'>".$row["id_genero"]."</td>
				<td class='td_banco'>".$row["diretor"]."</td>
				<td class='td_banco'>".$row["autores"]."</td>
			       	<td class='td_banco'>".$row["data_lancamento"]."</td>
				<td class='td_banco'>".$row["id_idade"]."</td>
				<td class='td_banco'>".$row["descricao"]."</td>
			</tr>";
               }
               echo "</table>";
	} 
	else {
               echo "0 resultados";
           }
           
           $conn->close();
        ?>

    </body>
</html>
