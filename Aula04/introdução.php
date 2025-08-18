<?php

//modelagem de dados sem a utilização de POO (Programação Orientada a Objetos)

$marca_carro1 = "honda";
$modelo_carro1 = "civic";
$ano_carro1 = 2016;
$revisao_carro1 = true;
$ndonos_carro1 = 2;

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = 2012;
$revisao_carro2 = false;
$ndonos_carro2 = 3;

$marca_carro3 = "fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = 2005;
$revisao_carro3 = false;
$ndonos_carro3 = 1;

$marca_carro4 = "Volkswagen";
$modelo_carro4 = "Jetta";
$ano_carro4 = 2020;
$revisao_carro4 = true;
$ndonos_carro4 = 7;

function revisao_feita($rev) {
    $rev = true;
    return $rev;
} 

$revisao_carro3 = revisao_feita($revisao_carro3); // Revisao True

function novoDono($qtde_donos, $qtde_donos2){
    return $qtde_donos + 1;
}

$ndonos_carro4 = novoDono($ndonos_carro4, $ndonos_carro3);

?>