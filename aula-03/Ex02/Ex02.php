<?php
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    $emailL = trim($email);
    $senhaL = trim($senha);

    if ($emailL == "fulano@email.com" && $senhaL == "1234Thanos") {
        echo "acertou";
    } else {
        echo "errou";
    }
?>