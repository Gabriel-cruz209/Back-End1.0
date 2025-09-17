<?php
// Exercício 5 – Calculadora com Sobrecarga Simulada
// Crie uma classe `Calculadora` com o método `somar()`.
// - Se receber 2 números, retorna a soma dos dois.
// - Se receber 3 números, retorna a soma dos três.

class Calculadora{
    public function somar($num){
        $quantidade = count($num);
        if($quantidade == 2){
            return $num[0] + $num[1];
        } elseif ($quantidade == 3){
            return $num[0] + $num[1] + $num[3];
        } else {
            echo"Quantidades de numeros esta errado, tente denovo..";
        }
    }
}

$cal1 = new Calculadora();
$cal1->somar(10,10);
?>