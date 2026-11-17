<?php

session_start();

$_SESSION = array();

session_destroy();

echo "Fim da sessão!";

?>

<br><br>

<a href="login.php">Fazer login</a>