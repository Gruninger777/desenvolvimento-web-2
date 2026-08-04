<?php

    $idade = $_GET['idade'];
    $membro = $_GET['membro'];
    $convidado = $_GET['convidado'];

    if ($idade >= 18 && $membro == "Sim" || $idade >= 18 && $convidado == "Sim"){
        echo "Entrada permitida!";
    } else if ($idade <= 18 && $membro == "Não" || $idade <= 18 &&$convidado == "Não"){
        echo "Entrada negada!";
    }
?>