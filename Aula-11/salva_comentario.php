<?php

require('conexao.php');

session_start();

$id_usuario = $_SESSION['id_usuario'];

$id_filme = $_POST['id_filme'];

$comentario = $_POST['comentario'];


$comando = "SELECT `id_usuario`
            FROM `filmes`
            WHERE `id` = '$id_filme'";

$stm = $conexao->prepare($comando);

$stm->execute();

$filme = $stm->fetch(PDO::FETCH_ASSOC);

$id_dono = $filme['id_usuario'];


$comando = "SELECT *
            FROM `amigos`
            WHERE `id_usuario` = '$id_usuario'
            AND `id_amigo` = '$id_dono'";

$stm = $conexao->prepare($comando);

$stm->execute();

$amizade = $stm->fetch(PDO::FETCH_ASSOC);


if(isset($amizade['id'])) {

    $comando = "INSERT INTO `comentarios`
    (`id`, `id_usuario`, `id_filme`, `comentario`)
    VALUES
    (NULL, '$id_usuario', '$id_filme', '$comentario')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Comentário cadastrado!";
    }

} else {

    echo "Você só pode comentar filmes de amigos.";
}

?>

<br><br>

<a href="detalhe_filme.php?id=<?php echo $id_filme; ?>">
Voltar
</a>