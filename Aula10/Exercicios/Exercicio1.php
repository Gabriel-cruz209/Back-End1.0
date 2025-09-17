<?php
// Exercício 1 – Formas Geométricas
// Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
// - `Quadrado` (lado),
// - `Retangulo` (base e altura),
// - `Circulo` (raio).

interface Forma{
    public function calcularArea();
}

class Quadrado implements Forma {
    public $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}

class Retangulo implements Forma{
    public $base;
    public $altura;

    public function __construct($base,$altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }
}

class Circulo implements Forma{
    public $raio;
    public function __construct($raio){
        $this->raio = $raio;
    }
    public function calcularArea(){
        return pi() * ($this->raio*$this->raio);
    }
}

$quadrado = new Quadrado(readline("Digite o lado do Quadrado: "));
echo"A area do quadrado é: ".$quadrado->calcularArea()."\n";

$circulo = new Circulo(readline("Digite o raio do Circulo:"));
echo "A area do circulo é: ".number_format($circulo->calcularArea())."\n";

$retangulo = new Retangulo(readline("Digite a base: "), readline("Digite a altura"));
echo "A area do Retangulo é: ".number_format($retangulo->calcularArea())."\n";

?>