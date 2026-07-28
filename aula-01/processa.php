<?php
$precoRecebido = trim($_GET['preco']);
$quantidadeRecebida = trim($_GET['quantidade']);

$preco = (float) $precoRecebido;
$quantidade = (int) $quantidadeRecebida;
$total = $preco * $quantidade;

echo "Preço: " . $precoRecebido . "<br>";
echo "Quantidade: " . $quantidadeRecebida . "<br>";
echo "Total: " . $total;
?>
