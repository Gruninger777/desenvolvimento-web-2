<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Barrefertas</title>
</head>
<body>

    <h1>Barrefertas</h1>

<?php

if (array_key_exists("nome", $_SESSION)) {

    echo "Olá, " . $_SESSION["nome"] . "!";

    echo "<br><br>";

    echo "<a href='sair.php'>Sair</a>";

} else {

    echo "Você precisa fazer login.";

    echo "<br><br>";

    echo "<a href='login.php'>Fazer login</a>";
}

?>

</body>
</html>