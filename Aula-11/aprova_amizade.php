<?php

require('conexao.php');

session_start();

$id_pendente = $_GET['id'];

$id_amigo = $_GET['id_usuario'];

$id_usuario = $_SESSION['id_usuario'];

$comando = "INSERT INTO `amigos`
(`id`, `id_usuario`, `id_amigo`)
VALUES
(NULL, '$id_usuario', '$id_amigo')";

$conexao->exec($comando);


$comando = "INSERT INTO `amigos`
(`id`, `id_usuario`, `id_amigo`)
VALUES
(NULL, '$id_amigo', '$id_usuario')";

$conexao->exec($comando);


$comando = "DELETE FROM `pendente`
            WHERE `id` = '$id_pendente'";

$conexao->exec($comando);

echo "Amizade aprovada!";

?>