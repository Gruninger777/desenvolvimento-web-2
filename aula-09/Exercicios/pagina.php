<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página</title>
</head>
<body>

<?php

if (array_key_exists("nome", $_SESSION)) {

    echo "Bem-vindo, " . $_SESSION["nome"] . "!";

} else {

    echo "Acesse a página de login.";

    echo "<br><br>";

    echo "<a href='login.php'>Login</a>";
}

?>

</body>
</html>