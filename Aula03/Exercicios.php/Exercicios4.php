<?php
// 4. Calculadora Simples

$numero1 = readline("Digite o primeiro numero");
$numero2 = readline("Digite o segundo numero");
$operador = readline("Digite um operador desses +, -, *, /.");

switch($operador) {
    case "+":
        $resultado = $numero1 + $numero2;
        echo" A soma dos numeros é: $resultado ";
        break;
    case "-":
        $resultado = $numero1 - $numero2;
        echo" A subtração dos numeros é: $resultado ";
        break;
    case "*":
        $resultado = $numero1 * $numero2;
        echo" A multiplicação dos numeros é: $resultado ";
        break;
    case "/":
        $resultado = $numero1 / $numero2;
        echo" A divisão dos numeros é: $resultado ";
        break;
}
?>