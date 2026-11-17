<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "filmes";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco",
    $usuario,
    $senha
);

?>