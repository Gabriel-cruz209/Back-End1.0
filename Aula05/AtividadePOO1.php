<?php

class Cachorro{
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome,$idade,$raca,$castrado,$sexo){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> raca = $raca;
        $this -> castrado = $castrado;
        $this -> sexo = $sexo;
    }

    public function latir($nome){
        echo"O cachorro $nome está latindo";
    }

    public function marcarTerritorio(){
        echo"O cachorro $this->nome da raça $this->raca está marcando territorio";
    }
}

$cachorro1 = new Cachorro("jeff", 10, "salsicha",true,"masculino");
$cachorro2 = new Cachorro("pipoca", 12, "boxer",false,"feminino");
$cachorro3 = new Cachorro("jeffa", 11, "salsicha",false,"feminino");
$cachorro4 = new Cachorro("alemao", 13, "pincher",true,"feminino");
$cachorro5 = new Cachorro("pedro", 15, "shit tzu",true,"masculino");
$cachorro6 = new Cachorro("tico", 10, "labrador",false,"masculino");
$cachorr7 = new Cachorro("gustavo", 11, "golden retriver",false,"feminino");
$cachorro8 = new Cachorro("gomes", 16, "bulldog",true,"feminino");
$cachorro9 = new Cachorro("bolinha", 18, "salsicha",true,"masculino");
$cachorro10 = new Cachorro("Scooby", 10, "labrador",true,"masculino");

$cachorro1 -> marcarTerritorio();
?>