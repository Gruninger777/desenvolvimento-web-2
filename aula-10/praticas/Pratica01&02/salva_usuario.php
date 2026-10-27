<?php

$servidor = "localhost";
$usuario = "root";
$senhaBanco = "";
$banco = "barrefertas";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco",
    $usuario,
    $senhaBanco
);

$email = $_POST["email"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$comando = "INSERT INTO `usuarios`
(`id`, `email`, `nome`, `senha`)
VALUES
(NULL, '$email', '$nome', '$senha')";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {

    echo "Usuário cadastrado com sucesso!";

    echo "<br><br>";

    echo "<a href='login.php'>Fazer login</a>";

} else {

    echo "Erro ao cadastrar usuário!";
}

$conexao = null;

?>