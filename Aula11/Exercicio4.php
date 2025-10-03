<?php

// Cenário 4 – Ciclo da Vida
// Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
// sangue para ajudar outras.

//Terra, Pessoas -> Classes
//Engravidar, nascer, crescer,fazer,doar,ajudar -> Metodos

class Terra{
    private $nome_terra;
    private $area_terra;
    private $populacao_terra;

    public function __construct($nome_terra, $area_terra, $populacao_terra){
        $this->nome_terra = $nome_terra;
        $this->area_terra = $area_terra;
        $this->populacao_terra = $populacao_terra;
    }

    public function Ajudar(){

    }
}

class Pessoas{
    private $nome_pessoa;
    private $idade_pessoa;
    private $cpf_pessoa;

    public function __construct($nome_pessoa, $idade_pessoa, $cpf_pessoa){
        $this->nome_pessoa = $nome_pessoa;
        $this->idade_pessoa = $idade_pessoa;
        $this->cpf_pessoa = $cpf_pessoa;
    }

    public function Engravidar(){

    }
    public function Nascer(){

    }
    public function Crescer(){

    }
    public function FazerEscolhas(){

    }
    public function DoarSangue(){

    }
}
?>