<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id_usuario'])) {

    $id_usuario = $_SESSION['id_usuario'];

    $id_amigo = $_GET['id'];

    $comando = "INSERT INTO `pendente`
    (`id`, `id_usuario`, `id_amigo`)
    VALUES
    (NULL, '$id_usuario', '$id_amigo')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0) {

        echo "Solicitação enviada!";

    } else {

        echo "Erro na solicitação.";
    }
}

?>