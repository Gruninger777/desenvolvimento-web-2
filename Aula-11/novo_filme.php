<?php

session_start();

if(isset($_SESSION['id_usuario'])) {

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Novo filme</title>

</head>

<body>

<h1>Novo filme</h1>

<form
    action="salva_filme.php"
    method="post"
    enctype="multipart/form-data">

    <label>Nome:</label>

    <input type="text" name="nome">

    <br>

    <label>Descrição:</label>

    <input type="text" name="descricao">

    <br>

    <label>Foto:</label>

    <input type="file" name="foto">

    <br>

    <label>Link:</label>

    <input type="text" name="link">

    <br>

    <label>Classificação:</label>

    <input type="number" name="classificacao">

    <br>

    <label>Nota:</label>

    <input type="number" name="nota">

    <br>

    <input type="submit">

</form>

</body>

</html>

<?php

} else {

?>

<a href="login.php">Fazer login</a>

<?php

}

?>