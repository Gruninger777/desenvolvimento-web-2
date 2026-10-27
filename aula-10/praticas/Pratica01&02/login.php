<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senhaBanco = "";
$banco = "barrefertas";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco",
    $usuario,
    $senhaBanco
);

if (array_key_exists("email", $_POST)) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = "SELECT `email`, `nome`, `senha`
                FROM `usuarios`";

    $stm = $conexao->prepare($comando);

    $stm->execute();

    $correto = false;

    while ($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

        if (
            $resultado["email"] == $email &&
            $resultado["senha"] == $senha
        ) {

            $_SESSION["nome"] = $resultado["nome"];

            $correto = true;
        }
    }

    if ($correto == true) {

        echo "Login realizado com sucesso!";

        echo "<br><br>";

        echo "<a href='index.php'>Entrar no site</a>";

    } else {

        echo "E-mail ou senha incorretos!";

        echo "<br><br>";
    }
}

$conexao = null;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="login.php" method="POST">

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha">

        <br><br>

        <input type="submit" value="Entrar">

    </form>

    <br>

    <a href="cadastro.php">Cadastrar usuário</a>

</body>
</html>