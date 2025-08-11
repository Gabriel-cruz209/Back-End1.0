<?php
// 9. Classificação de Temperatura

$temp = readline("Digite a temperatura");

if ($temp >= 25){
    echo 'Quente';
} elseif ($temp > 15 && $temp < 25){
    echo'Agradavel';
} else {
    echo 'Frio';
}

?>