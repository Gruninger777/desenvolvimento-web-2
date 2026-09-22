<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Receita</title>
</head>
<body>

    <h1>Adicionar Receita</h1>

    <form action="adicionar_receita.php"
          method="POST"
          enctype="multipart/form-data">

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Ingredientes:</label>
        <input type="text" name="ingredientes">

        <br><br>

        <label>Modo de preparo:</label>
        <input type="text" name="preparo">

        <br><br>

        <label>Foto:</label>
        <input type="file" name="foto">

        <br><br>

        <input type="submit" value="Salvar receita">

    </form>

    <br>

    <a href="mostrar_receitas.php">Ver receitas</a>

    <?php

    if (isset($_POST["nome"])) {

        $nome = $_POST["nome"];
        $ingredientes = $_POST["ingredientes"];
        $preparo = $_POST["preparo"];

        $nome_tmp = $_FILES["foto"]["tmp_name"];
        $nome_foto = $_FILES["foto"]["name"];

        $destino = "imagens/" . $nome_foto;

        $resultado = move_uploaded_file($nome_tmp, $destino);

        if ($resultado) {

            $arquivo = fopen(__DIR__ . "/receitas.md", "a");

            $linha =
                $nome . "|" .
                $destino . "|" .
                $ingredientes . "|" .
                $preparo . "\n";

            fwrite($arquivo, $linha);

            fclose($arquivo);

            echo "<p>Receita salva com sucesso!</p>";

        } else {

            echo "<p>Problema no envio da foto!</p>";

        }
    }

    ?>

</body>
</html>