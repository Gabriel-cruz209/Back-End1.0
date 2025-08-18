<?php

// Exercício 3 – Função que verifica necessidade de revisão
// Crie uma função precisaRevisao($revisao, $ano) que retorne "Precisa de revisão" se $revisao
// for false e o carro for anterior a 2022. Caso contrário, retorne "Revisão em dia".

$marca_carro3 = "fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = 2005;
$revisao_carro3 = false;
$ndonos_carro3 = 1;

function precisaRevisao($revisao, $ano){
    if($ano < 2022 && $revisao == false){
        return $rev = "Precisa de revisao";
    } elseif ($ano >=2022 && $revisao ==true){
        return $rev = "Revisão em dia";
    }
}

$revisao_carro3 = precisaRevisao($revisao_carro3, $ano_carro3);
echo"Revisão: $revisao_carro3";

?>