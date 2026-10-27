<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

    <h1>Cadastro de usuário</h1>

    <form action="salva_usuario.php" method="POST">

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha">

        <br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <br>

    <a href="login.php">Já tenho cadastro</a>

</body>
</html>