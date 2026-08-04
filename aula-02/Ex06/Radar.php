<?php

$Velocidade = $_GET["Vel"];
$Limite = $_GET["Limite"];

if ($Velocidade > $Limite){
   echo "Gerar multa";
}

if ($Velocidade <= $Limite)
    echo "Direção segura";
?>