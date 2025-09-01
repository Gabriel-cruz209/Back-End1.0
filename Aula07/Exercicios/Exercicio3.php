<?php

// Crie uma classe Aluno com os atributos privados nome e nota.
// o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
// valor for inválido, armazene 0.
// o Teste criando alunos com notas válidas e inválidas, exibindo os
// resultados com getNota().

class Aluno{
    private $nome;
    private $nota;

    public function __construct($nome, $nota){
        $this->setNome($nome);
        $this->setNota($nota);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNota($nota){
        if($nota <= 10 && $nota <= 0){
            $this->nota = $nota;
        } else {
            $this->nota = 0;
        }
    }
    public function getNota(){
        return $this->nota;
    }
}

$aluno1 = new Aluno("Samuel", 11);
$aluno2 = new Aluno("Pedro",2);
echo"Nome Aluno: {$aluno1->getNome()} \n Nota: {$aluno1->getNota()}";

?>