<?php

require('conexao.php');

// print_r($_POST);

$email = $_POST['email'];
$senha = $_POST['senha'];

$comando = "SELECT `id`, `nome`
            FROM `usuarios`
            WHERE `email` = '$email'
            AND `senha` = '$senha'";

$stm = $conexao->prepare($comando);
$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

// $resultado['id'] e $resultado['nome']

if(isset($resultado['id'])) {

    session_start();

    $_SESSION['id'] = $resultado['id'];
    $_SESSION['nome'] = $resultado['nome'];

    echo "Olá {$resultado['nome']}!";

?>

<br><br>

<a href="nova_oferta.php">Nova oferta</a>

<br>

<a href="ofertas.php">Ver ofertas</a>

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