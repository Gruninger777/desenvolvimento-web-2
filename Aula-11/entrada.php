<?php

require('conexao.php');

$email = $_POST['email'];

$senha = $_POST['senha'];

$senha = hash("sha256", $senha);

$comando = "SELECT
            `id`,
            `nome`,
            `nascimento`
            FROM `usuarios`
            WHERE `email` = '$email'
            AND `senha` = '$senha'";

$stm = $conexao->prepare($comando);

$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if(isset($resultado['id'])) {

    session_start();

    $ano_atual = date("Y");

    $ano_nascimento = substr(
        $resultado['nascimento'],
        0,
        4
    );

    $idade = $ano_atual - $ano_nascimento;

    $_SESSION['id_usuario'] = $resultado['id'];

    $_SESSION['nome'] = $resultado['nome'];

    $_SESSION['idade'] = $idade;

    echo "Olá {$resultado['nome']}!";

    echo "<br>";

    echo "Idade: $idade";

?>

<br><br>

<a href="novo_filme.php">Cadastrar filme</a>

<br>

<a href="filmes.php">Ver filmes</a>

<br>

<a href="amigos.php">Amigos</a>

<br>

<a href="pendentes.php">Solicitações de amizade</a>

<br>

<a href="sair.php">Sair</a>

<?php

} else {

    echo "Usuário inexistente!";

?>

<br>

<a href="login.php">Fazer login</a>

<?php

}

?>