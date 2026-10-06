<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco",
    $usuario,
    $senha
);

$nome = $_GET["nome"];
$email = $_GET["email"];

$comando = "SELECT `nome`, `email` FROM `usuarios`";

$stm = $conexao->prepare($comando);
$stm->execute();

$correto = false;

while ($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    if (
        $resultado["nome"] == $nome &&
        $resultado["email"] == $email
    ) {

        $_SESSION["nome"] = $resultado["nome"];

        $correto = true;
    }
}

if ($correto == true) {

    echo "Login realizado com sucesso!";

    echo "<br><br>";

    echo "<a href='pagina.php'>Entrar no site</a>";

} else {

    echo "Nome ou e-mail incorretos!";
}

$conexao = null;

?>