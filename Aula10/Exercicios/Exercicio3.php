<?php
// Exercício 3 – Meios de Transporte
// Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:

// - `Carro` → "O carro está andando na estrada",
// - `Barco` → "O barco está navegando no mar",
// - `Avião` → "O avião está voando no céu".
// - `Elevador` → "O Elevador está correndo pelo no prédio".
namespace Exercicios;

Interface Transporte{
    public function mover();
}

class Carro implements Transporte{

    public function mover(){
        echo"O carro está andando na estrada \n";
    }
}

class Aviao implements Transporte{


    public function mover(){
        echo"O avião está voando no céu \n";
    }
}

class Barco implements Transporte{

    public function mover(){
        echo"O barco está navegando no mar \n";
    }
}

class Elevador implements Transporte{


    public function mover(){
        echo"O Elevador está correndo pelo no prédio";
    }
}

$carro1 = new Carro();
$carro1->mover();


?>