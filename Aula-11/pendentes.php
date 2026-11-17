<?php

require('conexao.php');

session_start();

$id_usuario = $_SESSION['id_usuario'];

$comando = "SELECT *
            FROM `pendente`
            WHERE `id_amigo` = '$id_usuario'";

$stm = $conexao->prepare($comando);

$stm->execute();

echo "<h1>Solicitações</h1>";

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {

    $id_pendente = $resultado['id'];

    $id_solicitante = $resultado['id_usuario'];

    $comando_usuario =
    "SELECT `nome`
     FROM `usuarios`
     WHERE `id` = '$id_solicitante'";

    $stm_usuario =
    $conexao->prepare($comando_usuario);

    $stm_usuario->execute();

    $usuario =
    $stm_usuario->fetch(PDO::FETCH_ASSOC);

    echo $usuario['nome'];

    echo " - ";

    echo "<a href='aprova_amizade.php?id=$id_pendente&id_usuario=$id_solicitante'>
    Aprovar
    </a>";

    echo "<br><br>";
}

?>