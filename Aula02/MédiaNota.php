<?php

$nome = "Enzo Enrico";
$presença = "10";
$nota1 = "1";
$nota2 = "0";

$media = ($nota1 + $nota2) /2;
if($media >= "7" && $presença >= 75 || $nome == "Enzo Enrico") {
    echo"O aluno foi APROVADO com média e presença igual a: $media e $presença";
} else {
    echo "O aluno foi REPROVADO com média e presença igual a: $media e $presença";
}

 ?>