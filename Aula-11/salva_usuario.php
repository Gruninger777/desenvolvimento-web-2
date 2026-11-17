<?php

require('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];

$senha = $_POST['senha'];

$senha = hash("sha256", $senha);

$comando = "INSERT INTO `usuarios`
(`id`, `nome`, `email`, `nascimento`, `senha`)
VALUES
(NULL, '$nome', '$email', '$nascimento', '$senha')";

$linhas = $conexao->exec($comando);

if($linhas > 0) {

    echo "Usuário cadastrado com sucesso!";

?>

<br><br>

<a href="login.php">Fazer login</a>

<?php

} else {

    echo "Erro no cadastro.";
}

?>