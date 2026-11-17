<?php

require('conexao.php');

session_start();

$id_usuario = $_SESSION['id_usuario'];

$id_filme = $_GET['id'];

$comando = "SELECT *
            FROM `curtidas`
            WHERE `id_usuario` = '$id_usuario'
            AND `id_filme` = '$id_filme'";

$stm = $conexao->prepare($comando);

$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if(isset($resultado['id'])) {

    echo "Você já curtiu esse filme.";

} else {

    $comando = "INSERT INTO `curtidas`
    (`id`, `id_usuario`, `id_filme`)
    VALUES
    (NULL, '$id_usuario', '$id_filme')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Filme curtido!";
    }
}

?>

<br><br>

<a href="detalhe_filme.php?id=<?php echo $id_filme; ?>">
Voltar
</a>