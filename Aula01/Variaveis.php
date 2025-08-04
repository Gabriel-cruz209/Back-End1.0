<?php 

echo"Olá! \n";
$nome = "Gabriel! \n";
$idade = "18";
$ano_atual = "2025";

$data_nasc = $ano_atual - $idade;
echo $nome, "você nasceu em :", $data_nasc ;

//Dado uma frase “Programação em php.” transformá‐la em maiúscula, imprima,depois em minúscula e imprima de novo.
$frase = "\nProgramação em php. \n";
echo $frase;
echo strtoupper(string: $frase);
echo strtolower(string: $frase);

//Numa dada frase “O PHP foi criado em mil novecentos e noventa e cinco”.- Trocar o “O” (letra) por “0”(zero), o “a” por “4” e o “i” por “1”.

$frasee = "\n O PHP foi criado em mil novecentos e noventa e cinco";
$frasee = str_replace("O","0",$frasee);
$frasee = str_replace("a","4",$frasee);
$frasee = str_replace("i","1",$frasee);
//$frasee = str_replace(['o','a','i',],['0','4','1',], $frasee);

echo $frasee;

?>