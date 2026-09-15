<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Diário</title>
</head>
<body>

    <h1>Meu Diário</h1>

    <form action="adicionar.php">
        <label>Escreva no diário:</label>
        <br>

        <input type="text" name="texto">

        <br><br>

        <input type="submit" value="Salvar">
    </form>

    <br>

    <a href="mostrar.php">Ver diário</a>

    <?php

    if (isset($_GET['texto'])) {

        $texto = $_GET['texto'];

        $arquivo = fopen("diario.md", "a");

        fwrite($arquivo, $texto . "\n");

        fclose($arquivo);

        echo "<p>Texto salvo!</p>";
    }

    ?>

</body>
</html>