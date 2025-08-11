<?php

use BcMath\Number;

$numero = readline("Digite o primeiro tipo");
$numero2 = readline("Digite o segundo tipo");

$tipo = gettype($numero);
$tipo2 = gettype($numero2);

if ($tipo == $tipo2) {
    echo "Variáveis de tipos iguais! Primeiro valor do tipo $tipo e segundo valor do tipo $tipo2";
} else {
    echo "ERRO! Variáveis de tipos diferentes. Primeiro valor do tipo $tipo e segundo valor do tipo $tipo2";
}

?>