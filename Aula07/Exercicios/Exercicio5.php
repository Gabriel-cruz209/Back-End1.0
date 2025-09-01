<?php

// Crie uma classe Funcionario com os atributos privados nome e salario.
// o Crie métodos setNome, getNome, setSalario e getSalario.
// o Defina os valores de um funcionário com os setters.
// o Depois, altere o nome e o salário usando novamente os
// setters.
// o Mostre, com os getters, que os valores realmente foram
// modificados.

class Funcionario{
    private $nome;
    private $salario;

    public function __construct($nome, $salario){
        $this->setNome($nome);
        $this->setSalario($salario);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }
}

$funcionario1 = new Funcionario("Jeff",10);

$funcionario1 -> setNome('Matheus');
$funcionario1 -> setSalario(1500);

echo"Nome: {$funcionario1->getNome()} \n Salário: {$funcionario1->getSalario()}";
?>