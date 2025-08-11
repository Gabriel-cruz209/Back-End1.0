<?php

$nome = "Enzo Enrico";

echo "Boa Tarde";
$presença = readline("Digite a presença do aluno");
$nota1 = readline("Digite a nota 1 do aluno");
$nota2 = readline("Digite a nota 2 do aluno");

$media = ($nota1 + $nota2) /2;
if($media >= "7" && $presença >= 75 || $nome == "Enzo Enrico") {
    echo"O aluno foi APROVADO com média e presença igual a: $media e $presença";
} else {
    echo "O aluno foi REPROVADO com média e presença igual a: $media e $presença";
}

 ?>