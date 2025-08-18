<?php

// Exercício 2 – Função que verifica se o carro é seminovo
// Crie uma função ehSeminovo($ano) que receba o ano de fabricação e retorne true se o
// carro tiver até 3 anos de uso e false caso contrário.
// Teste a função com os carros fornecidos.

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = 2012;
$revisao_carro2 = false;
$ndonos_carro2 = 3;

function ehSeminovo($ano){
    if($ano < 2022){
        return $rev = "true";
    } elseif ($ano >=2022){
        return $rev = "false";
    }
}

$ano_carro2 = ehSeminovo($ano_carro2);

echo" O carro $marca_carro2, $ano_carro2
";

?>