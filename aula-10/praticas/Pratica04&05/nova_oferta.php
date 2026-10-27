<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova oferta</title>
</head>

<body>

<?php

if(isset($_SESSION['id'])) {

?>

    <h1>Nova oferta</h1>

    <form action="salva_oferta.php"
          method="post"
          enctype="multipart/form-data">

        <label for="">Nome:</label>
        <input type="text" name="nome">

        <br>

        <label for="">Descrição:</label>
        <input type="text" name="descricao">

        <br>

        <label for="">Foto:</label>
        <input type="file" name="foto">

        <br>

        <label for="">Link:</label>
        <input type="text" name="link">

        <br>

        <label for="">Valor:</label>
        <input type="text" name="valor">

        <br>

        <input type="submit">

    </form>

<?php

} else {

?>

    <a href="login.php">Fazer login</a>

<?php

}

?>

</body>

</html>