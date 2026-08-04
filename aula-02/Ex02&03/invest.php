<?php

$cap = $_GET['capital'];
$tax = $_GET['taxa'];
$temp = $_GET['tempo'];

$juros = $cap * ($tax/100) * $temp;
echo $juros;
?>