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
                        echo "<p>Descrição: " . nl2br(htmlspecialchars($row["descricao"])) . "</p>";

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
