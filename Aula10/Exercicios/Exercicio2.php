<?php
// Exercício 2 – Animais e Sons
// Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
// - `Cachorro` → "Au au!",
// - `Gato` → "Miau!",
// - `Vaca` → "Muuu!".

class Animal {
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Cachorro extends Animal{
    private $som;

    public function __construct($som,$nome){
        parent::__construct($nome);
        $this->$som;
    }

    public function fazerSom(){
        echo"O cachorro faz $this->som";
    }
}

class Gato extends Animal{
    private $som;

    public function __construct($som,$nome){
        parent::__construct($nome);
        $this->$som;
    }

    public function fazerSom(){
        echo"O gato faz $this->som";
    }
}

class Vaca extends Animal{
    private $som;

    public function __construct($som,$nome){
        parent::__construct($nome);
        $this->$som;
    }

    public function fazerSom(){
        echo"O Vaca faz $this->som";
    }
}

?>