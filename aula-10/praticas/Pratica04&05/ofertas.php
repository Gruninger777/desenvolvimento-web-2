<?php

require('conexao.php');

$comando = "SELECT `id`, `foto`, `valor`
            FROM `ofertas`
            ORDER BY `id` DESC";

$stm = $conexao->prepare($comando);

$stm->execute();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Ofertas</title>

</head>

<body>

    <h1>Ofertas</h1>

<?php

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

?>

    <a href="oferta.php?id=<?php echo $resultado['id']; ?>">

        <img
            src="<?php echo $resultado['foto']; ?>"
            width="200">

    </a>

    <br>

    <?php

    echo "R$ " . $resultado['valor'];

    ?>

    <br><br>

<?php

}

$conexao = null;

?>

</body>

</html>