<?php

require('conexao.php');

session_start();

$comando = "SELECT *
            FROM `filmes`
            ORDER BY `id` DESC";

$stm = $conexao->prepare($comando);

$stm->execute();

echo "<h1>Filmes</h1>";

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    echo "<a href='detalhe_filme.php?id={$resultado['id']}'>";

    echo "<img src='{$resultado['foto']}' height='150px'>";

    echo "</a>";

    echo "<br>";

    echo "<h2>{$resultado['nome']}</h2>";

    echo "<br>";
}

?>