<?php

$arquivo = fopen("notas.txt", "a");

$nome = $_GET["nome"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];

fwrite(
    $arquivo,
    $nome . ", " . $nota1 . ", " . $nota2 . ", " . $nota3 . "\n"
);

fclose($arquivo);

echo "Dados salvos com sucesso!";

?>