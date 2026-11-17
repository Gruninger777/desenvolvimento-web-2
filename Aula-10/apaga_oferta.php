<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id'])) {

    $id = $_GET['id'];

    $comando = "DELETE FROM `comentarios`
                WHERE `id_oferta` = '$id'";

    $conexao->exec($comando);


    $comando = "DELETE FROM `ofertas`
                WHERE `id` = '$id'";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Oferta apagada com sucesso!";

?>

        <br><br>

        <a href="ofertas.php">
            Voltar para ofertas
        </a>

<?php

    } else {

        echo "Erro ao apagar oferta.";
    }

} else {

?>

    <a href="login.php">Fazer login</a>

<?php

}

?>