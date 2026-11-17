<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

</head>

<body>

<h1>Cadastro</h1>

<form action="salva_usuario.php" method="post">

    <label>Nome:</label>
    <input type="text" name="nome">

    <br>

    <label>E-mail:</label>
    <input type="email" name="email">

    <br>

    <label>Nascimento:</label>
    <input type="date" name="nascimento">

    <br>

    <label>Senha:</label>
    <input type="password" name="senha">

    <br>

    <input type="submit">

</form>

</body>

</html>