<?php

session_start();

require('conexao.php');

$id = $_GET['id'];

$comando = "SELECT
            `id_usuario`,
            `nome`,
            `descricao`,
            `foto`,
            `link`,
            `valor`
            FROM `ofertas`
            WHERE `id` = '$id'";

$stm = $conexao->prepare($comando);

$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Oferta</title>

</head>

<body>

<?php

if(isset($resultado['nome'])) {

?>

    <h1>
        <?php echo $resultado['nome']; ?>
    </h1>

    <img
        src="<?php echo $resultado['foto']; ?>"
        width="300">

    <br><br>

<?php

    echo "Descrição: " . $resultado['descricao'];

    echo "<br><br>";

    echo "Valor: R$ " . $resultado['valor'];

    echo "<br><br>";

    echo "Link: " . $resultado['link'];

?>

    <br><br>

    <a href="<?php echo $resultado['link']; ?>">
        Ir para a oferta
    </a>


    <hr>


    <h2>Comentários</h2>

    <fieldset>

<?php

    $comandoComentarios = "SELECT
                           `id_usuario`,
                           `comentario`
                           FROM `comentarios`
                           WHERE `id_oferta` = '$id'";

    $stmComentarios = $conexao->prepare($comandoComentarios);

    $stmComentarios->execute();

    $temComentario = false;

    while($comentario = $stmComentarios->fetch(PDO::FETCH_ASSOC)) {

        $temComentario = true;

        echo $comentario['comentario'];

        echo "<br><br>";
    }

    if($temComentario == false) {

        echo "Nenhum comentário ainda.";
    }

?>

    </fieldset>


    <br>


<?php

    if(isset($_SESSION['id'])) {

?>

        <h2>Comentar</h2>

        <form action="salva_comentario.php" method="post">

            <input
                type="hidden"
                name="id_oferta"
                value="<?php echo $id; ?>">

            <label for="">
                Comentário:
            </label>

            <br>

            <input
                type="text"
                name="comentario">

            <input
                type="submit"
                value="Enviar">

        </form>

<?php

    } else {

?>

        <a href="login.php">
            Faça login para comentar
        </a>

<?php

    }

} else {

    echo "Oferta não encontrada.";
}

$conexao = null;

?>

<br><br>

<a href="ofertas.php">
    Voltar para ofertas
</a>

</body>

</html>