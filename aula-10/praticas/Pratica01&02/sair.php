<?php

session_start();

session_destroy();

echo "Logout realizado com sucesso!";

echo "<br><br>";

echo "<a href='login.php'>Fazer login novamente</a>";

?>