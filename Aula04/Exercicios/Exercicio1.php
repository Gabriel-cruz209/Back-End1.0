<?php

// Função para exibir dados do carro  O carro Nissan Versa, ano 2020, já passou por revisão: Sim, número de donos: 2

$marca = "honda";
$modelo = "civic";
$ano = 2016;
$revisao1 = true;
$Ndonos = 2;

function exibirCarro($revisao){
    if ($revisao == true){
        $rev = 'sim';
        return $rev;
    } elseif ($revisao == false) {
        $rev = 'não';
        return $rev;
    } else{
        echo"Erro";
    }
}

$revisao1 = exibirCarro($revisao1);
echo" O carro $marca, $ano, já passou por revisão: $revisao1, número de donos: $Ndonos
";

?>