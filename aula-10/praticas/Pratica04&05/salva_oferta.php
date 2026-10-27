<?php

session_start();

require('conexao.php');

$id_usuario = $_SESSION['id'];

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$link = $_POST['link'];
$valor = $_POST['valor'];

$nome_tmp = $_FILES['foto']['tmp_name'];
$nome_foto = $_FILES['foto']['name'];

$destino = "imagens/" . $nome_foto;

$resultado = move_uploaded_file(
    $nome_tmp,
    $destino
);

if($resultado) {

    $comando = "INSERT INTO `ofertas`
    (`id_usuario`, `nome`, `descricao`, `foto`, `link`, `valor`)
    VALUES
    ('$id_usuario', '$nome', '$descricao', '$destino', '$link', '$valor')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Oferta cadastrada com sucesso!";

?>

        <br><br>

        <a href="ofertas.php">Ver ofertas</a>

<?php

    } else {

        echo "Erro no cadastro da oferta!";
    }

} else {

    echo "Erro no envio da foto!";
}

?>