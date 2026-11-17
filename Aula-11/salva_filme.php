<?php

require('conexao.php');

session_start();

if(isset($_SESSION['id_usuario'])) {

    $id_usuario = $_SESSION['id_usuario'];

    $idade = $_SESSION['idade'];

    $nome = $_POST['nome'];

    $descricao = $_POST['descricao'];

    $link = $_POST['link'];

    $classificacao = $_POST['classificacao'];

    $nota = $_POST['nota'];

    if($classificacao <= $idade) {

        $nome_original = $_FILES['foto']['name'];

        $nome_tmp = $_FILES['foto']['tmp_name'];

        $destino = "imagens/$nome_original";

        move_uploaded_file(
            $nome_tmp,
            $destino
        );

        $comando = "INSERT INTO `filmes`
        (`id`, `id_usuario`, `nome`, `descricao`,
        `foto`, `link`, `classificacao`, `nota_usuario`)
        VALUES
        (NULL, '$id_usuario', '$nome', '$descricao',
        '$destino', '$link', '$classificacao', '$nota')";

        $linhas = $conexao->exec($comando);

        if($linhas > 0) {

            echo "Filme cadastrado com sucesso!";

        } else {

            echo "Erro ao cadastrar filme.";
        }

    } else {

        echo "Você não possui idade para cadastrar esse filme.";
    }

} else {

?>

<a href="login.php">Fazer login</a>

<?php

}

?>