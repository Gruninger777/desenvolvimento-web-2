<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id_usuario'])) {

    $id_usuario = $_SESSION['id_usuario'];

    $comando = "SELECT `id`, `nome`
                FROM `usuarios`";

    $stm = $conexao->prepare($comando);

    $stm->execute();

    echo "<h1>Usuários</h1>";

    while(
        $resultado =
        $stm->fetch(PDO::FETCH_ASSOC)
    ) {

        if($resultado['id'] != $id_usuario) {

            echo $resultado['nome'];

            echo " - ";

            echo "<a href='solicita_amizade.php?id={$resultado['id']}'>
            Solicitar amizade
            </a>";

            echo "<br><br>";
        }
    }

} else {

?>

<a href="login.php">Fazer login</a>

<?php

}

?>