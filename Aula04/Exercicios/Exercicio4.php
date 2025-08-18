<?php

// Exercício 4 – Função que calcula valor estimado
// Crie uma função calcularValor($marca, $ano, $Ndonos) que estime o preço do carro usando
// regras simples, por exemplo:
// • Carros da BMW e Fiat têm preço base de R$ 300.000
// • Volkswagen: R$ 70.000
// • Honda: R$ 150.000
// • A cada dono adicional além do primeiro, o valor cai 5%
// • Para cada ano de uso, o valor cai R$ 3.000
// A função deve retornar o valor estimado e você deve imprimir o resultado para cada
// carro.

$marca_carro4 = "Volkswagen";
$modelo_carro4 = "Jetta";
$ano_carro4 = 2020;
$revisao_carro4 = true;
$ndonos_carro4 = 7;
$preço = 70000;

function calcularValor($marca, $ano, $Ndonos){
    $j = (2025 - $ano) * 3000;
    $a = $Ndonos * 0.05;
    if($marca == "Volkswagen"){
        $preco = (70000 - (70000 * $a) ) - $j;
        return $preco;
    } elseif($marca == "Honda"){
        $preco = (150000 - (150000 * $a) ) - $j;
        return $preco;
    } elseif($marca == "BMW" && $marca == "Fiat" ){
        $preco = (300000 - (300000 * $a) ) - $j;
        return $preco;
    } else {
        echo"Erro";
    }
}

$preço = calcularValor($marca_carro4, $ano_carro4, $ndonos_carro4);
echo "$preço";


?>