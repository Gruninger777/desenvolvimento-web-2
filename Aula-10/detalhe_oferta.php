<?php

require('conexao.php');

session_start();

$i = $_GET['id'];

$comando = "SELECT * FROM `ofertas` WHERE `id` = $i";

$stm = $conexao->prepare($comando);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    echo "<img src='{$resultado['foto']}' height='100px'>";

    echo "<h1>{$resultado['nome']}</h1>";

    echo "<p>{$resultado['descricao']}</p>";

    echo "<h3>{$resultado['preco']}</h3>";

    echo "<a href='{$resultado['link']}'>Comprar</a>";
}

?>

<hr>

<h2>Comentários</h2>

<fieldset>

<?php

$comando = "SELECT * FROM `comentarios`
            WHERE `id_oferta` = $i
            ORDER BY `id` DESC";

$stm = $conexao->prepare($comando);

$stm->execute();

$tem_comentario = false;

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    $tem_comentario = true;

    echo $resultado['comentario'];

    if(isset($_SESSION['id'])) {

        echo " - ";

        echo "<a href='apaga_comentario.php?id={$resultado['id']}&id_oferta=$i'>Apagar</a>";
    }

    echo "<br><br>";
}

if($tem_comentario == false) {

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
        value="<?php echo $i; ?>">

    <label>Comentário:</label>

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

<a href="login.php">Faça login para comentar</a>

<?php

}

?>

<br><br>

<a href="ofertas.php">Voltar</a>