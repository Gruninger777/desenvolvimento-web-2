<?php
    $veiculo = $_GET['veiculo'];

    $veiculo = trim($veiculo);
    $veiculo = strtolower($veiculo);

    if ($veiculo == "trem") {
        ?>    
            <a href="">
                <img src="https://aem-all.accor.com/content/dam/all/hubs/americas/latam/generic-images/all-magazine/passeio-trem-brasil-2024-1.jpg" alt="">
            </a>
        <?php
    } elseif ($veiculo == "carro"){
        ?>
            <a href="">
                <img src="https://static.ndmais.com.br/2024/08/carro-0-km-fiat-mobi.jpg" alt="">
            </a>
        <?php
    } elseif ($veiculo == "moto"){
        ?>
            <a href="">
                <img src="https://rihappy.vtexassets.com/arquivos/ids/8601669/Moto-Eletrica---Marvel---Homem-Aranha---6V---Azul---Bandeirante-0.jpg?v=638896705409470000" alt="">
            </a>
        <?php
    } elseif ($veiculo == "trator"){
        ?>
            <a href="">
                <img src="https://cdn.awsli.com.br/2500x2500/1312/1312517/produto/360711334/54c8fb1dbd04ba2702a56249f26c17b3-cc81usx9u2.jpg" alt="">
            </a>
        <?php
    } elseif ($veiculo == "barco"){
        ?>
            <a href="">
                <img src="https://img.magnific.com/vetores-premium/barco-de-pesca-colorido-desenho-animado-para-atividade-de-desenho-de-bebe-barco-de-pesca-ilustracao-vetorial-para-kida-desenhado_1293239-10335.jpg?semt=ais_hybrid&w=740&q=80" alt="">
            </a>
        <?php
    }

?>