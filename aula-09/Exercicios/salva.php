<?php

$servidor = "localhost";
$usuario = "root";
$senhaBanco = "";
$banco = "site";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco",
    $usuario,
    $senhaBanco
);

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$comando = "INSERT INTO `usuarios`
(`id`, `nome`, `email`, `senha`)
VALUES
(NULL, '$nome', '$email', '$senha')";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {
    echo "Dados salvos!";
} else {
    echo "Erro ao salvar dados!";
}

$conexao = null;

?>