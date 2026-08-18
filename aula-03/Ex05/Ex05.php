<?php

$texto = $_GET["texto"];
$fundo = $_GET["fundo"];
$cor = $_GET["cor"];

echo '<p style="background-color: ' . $fundo . '; color: ' . $cor . ';">';
echo $texto;
echo '</p>';

?>