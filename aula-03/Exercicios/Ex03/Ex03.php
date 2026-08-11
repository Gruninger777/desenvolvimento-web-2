<?php
    $sexo = $_GET['sexo'];
    $tamanho = $_GET['tamanho'];

    $valormasc = 30;
    $valorfem = 25;

    if($sexo == "Masculino" && $tamanho == "P") {
        echo ($valormasc - 5);
    } elseif ($sexo == "Masculino" && $tamanho == "M") {
        echo ($valormasc + 1);
    } elseif ($sexo == "Masculino" && $tamanho == "G") {
        echo ($valormasc + 10);
    }

    if($sexo == "Feminino" && $tamanho == "P") {
        echo ($valorfem - 5);
    } elseif ($sexo == "Feminino" && $tamanho == "M") {
        echo ($valorfem + 1);
    } elseif ($sexo == "Feminino" && $tamanho == "G") {
        echo ($valorfem + 10);
    }
?>