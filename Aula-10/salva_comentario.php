<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id'])) {

    $id_usuario = $_SESSION['id'];

    $id_oferta = $_POST['id_oferta'];

    $comentario = $_POST['comentario'];

    $comando = "INSERT INTO `comentarios`
    (`id`, `id_usuario`, `id_oferta`, `comentario`)
    VALUES
    (NULL, '$id_usuario', '$id_oferta', '$comentario')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Comentário cadastrado com sucesso!";

?>

        <br><br>

        <a href="detalhe_oferta.php?id=<?php echo $id_oferta; ?>">
            Voltar para oferta
        </a>

<?php

    } else {

        echo "Erro no comentário.";
    }

} else {

?>

    <a href="login.php">Fazer login</a>

<?php

}

?>