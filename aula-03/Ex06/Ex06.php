<?php

$sexo = $_GET['sexo'];
$tamanho = $_GET['tamanho'];
$quantidade = $_GET['quantidade'];

$valormasc = 30;
$valorfem = 25;

if ($sexo == "Masculino" && $tamanho == "P") {
    $valor = $valormasc - 5;

} elseif ($sexo == "Masculino" && $tamanho == "M") {
    $valor = $valormasc + 1;

} elseif ($sexo == "Masculino" && $tamanho == "G") {
    $valor = $valormasc + 10;
}

if ($sexo == "Feminino" && $tamanho == "P") {
    $valor = $valorfem - 5;

} elseif ($sexo == "Feminino" && $tamanho == "M") {
    $valor = $valorfem + 1;

} elseif ($sexo == "Feminino" && $tamanho == "G") {
    $valor = $valorfem + 10;
}

$subtotal = $valor * $quantidade;

$porcentagem = $quantidade * 3;

$desconto = $subtotal * $porcentagem / 100;

$total = $subtotal - $desconto;

echo "Valor unitário: " . $valor;
echo "<br>";

echo "Quantidade: " . $quantidade;
echo "<br>";

echo "Subtotal: " . $subtotal;
echo "<br>";

echo "Desconto: " . $porcentagem . "%";
echo "<br>";

echo "Valor final: " . $total;

?>