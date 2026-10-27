<?php

session_start();

require('conexao.php');

$id_usuario = $_SESSION['id'];

$id_oferta = $_POST['id_oferta'];

$comentario = $_POST['comentario'];

$comando = "INSERT INTO `comentarios`
(`id_usuario`, `id_oferta`, `comentario`)
VALUES
('$id_usuario', '$id_oferta', '$comentario')";

$linhas = $conexao->exec($comando);

if($linhas > 0) {

    echo "Comentário salvo com sucesso!";

?>

    <br><br>

    <a href="oferta.php?id=<?php echo $id_oferta; ?>">
        Voltar para oferta
    </a>

<?php

} else {

    echo "Erro ao salvar comentário!";
}

?>