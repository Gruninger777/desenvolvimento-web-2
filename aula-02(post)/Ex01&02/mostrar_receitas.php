<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Receitas</title>
</head>
<body>

    <h1>Receitas</h1>

    <?php

    $arquivo = fopen(__DIR__ . "/receitas.md", "r");

    while (!feof($arquivo)) {

        $linha = fgets($arquivo);

        if (trim($linha) != "") {

            $dados = explode("|", $linha);

            if (count($dados) == 4) {

                $nome = $dados[0];
                $foto = $dados[1];
                $ingredientes = $dados[2];
                $preparo = $dados[3];

                echo "<h2>" . $nome . "</h2>";

                echo "<img src='" . $foto . "' width='300'>";

                echo "<h3>Ingredientes</h3>";
                echo "<p>" . $ingredientes . "</p>";

                echo "<h3>Modo de preparo</h3>";
                echo "<p>" . $preparo . "</p>";

                echo "<hr>";
            }
        }
    }

    fclose($arquivo);

    ?>

    <a href="adicionar_receita.php">Adicionar receita</a>

</body>
</html>