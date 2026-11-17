<?php

require('conexao.php');

session_start();

$id_filme = $_GET['id'];

$id_usuario = $_SESSION['id_usuario'];

$comando = "SELECT *
            FROM `filmes`
            WHERE `id` = '$id_filme'";

$stm = $conexao->prepare($comando);

$stm->execute();

$filme = $stm->fetch(PDO::FETCH_ASSOC);

echo "<img src='{$filme['foto']}' height='200px'>";

echo "<h1>{$filme['nome']}</h1>";

echo "<p>{$filme['descricao']}</p>";

echo "<p>Classificação: {$filme['classificacao']} anos</p>";

echo "<p>Nota: {$filme['nota_usuario']}</p>";

echo "<a href='{$filme['link']}'>Abrir link</a>";


echo "<hr>";


$total_curtidas = 0;

$comando = "SELECT *
            FROM `curtidas`
            WHERE `id_filme` = '$id_filme'";

$stm = $conexao->prepare($comando);

$stm->execute();

while($curtida = $stm->fetch(PDO::FETCH_ASSOC)) {

    $total_curtidas++;
}

echo "<h3>Curtidas: $total_curtidas</h3>";

echo "<a href='curtir.php?id=$id_filme'>Curtir</a>";


echo "<hr>";


$id_dono = $filme['id_usuario'];

$comando = "SELECT *
            FROM `amigos`
            WHERE `id_usuario` = '$id_usuario'
            AND `id_amigo` = '$id_dono'";

$stm = $conexao->prepare($comando);

$stm->execute();

$amizade = $stm->fetch(PDO::FETCH_ASSOC);


if(isset($amizade['id'])) {

    echo "<h2>Comentários</h2>";

    $comando = "SELECT *
                FROM `comentarios`
                WHERE `id_filme` = '$id_filme'
                ORDER BY `id` DESC";

    $stm = $conexao->prepare($comando);

    $stm->execute();

    while(
        $comentario =
        $stm->fetch(PDO::FETCH_ASSOC)
    ) {

        echo $comentario['comentario'];

        echo "<br><br>";
    }

?>

    <h2>Comentar</h2>

    <form
        action="salva_comentario.php"
        method="post">

        <input
            type="hidden"
            name="id_filme"
            value="<?php echo $id_filme; ?>">

        <input
            type="text"
            name="comentario">

        <input
            type="submit"
            value="Comentar">

    </form>

<?php

} else {

    echo "<p>Somente amigos podem comentar neste filme.</p>";
}

?>

<br><br>

<a href="filmes.php">Voltar</a>