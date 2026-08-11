<?php

$email = $_GET["email"];

$noticias = isset($_GET["noticias"]);
$promocoes = isset($_GET["promocoes"]);

echo "E-mail: " . $email;
echo "<br>";

if ($noticias) {
    echo "Receber notícias: Sim";
    echo "<br>";
}

if ($promocoes) {
    echo "Receber promoções: Sim";
    echo "<br>";
}

if (!$noticias && !$promocoes) {
    echo "Assinatura recusada!";
}

?>