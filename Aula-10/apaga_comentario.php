<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id'])) {

    $id = $_GET['id'];

    $id_oferta = $_GET['id_oferta'];

    $comando = "DELETE FROM `comentarios`
                WHERE `id` = '$id'";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Comentário apagado com sucesso!";

?>

        <br><br>

        <a href="detalhe_oferta.php?id=<?php echo $id_oferta; ?>">
            Voltar
        </a>

<?php

    } else {

        echo "Erro ao apagar comentário.";
    }

} else {

?>

    <a href="login.php">Fazer login</a>

<?php

}

?>