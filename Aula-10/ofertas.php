<?php

require('conexao.php');

session_start();

$comando = "SELECT `id`, `foto`, `preco`
            FROM `ofertas`
            ORDER BY `id` DESC";

$stm = $conexao->prepare($comando);

$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    echo "<a href=\"detalhe_oferta.php?id={$resultado['id']}\">";

    echo "<img src='{$resultado['foto']}' height='100px'>";

    echo "</a>";

    echo "<br><h2>";

    echo $resultado['preco'];

    echo "</h2>";

    if(isset($_SESSION['id'])) {

        echo "<a href='apaga_oferta.php?id={$resultado['id']}'>Apagar oferta</a>";
    }

    echo "<br><br>";
}

?>