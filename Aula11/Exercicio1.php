<?php

// cenários reais

// Cenário 1 – Viagem pelo Mundo
// Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
// Terra, eles poderão comer comidas típicas e nadar em rios ou praias.

//Turistas,Lugares-> Classe
// Metodos -> Visitar,comer,nadar

class Turistas{
    private $nome_turista;
    private $endereco_turista;
    private $cpf_turista;
    private $idade_turista;

    public function __construct($nome_turista, $endereco_turista, $cpf_turista, $idade_turista){
        $this->nome_turista = $nome_turista;
        $this->endereco_turista = $endereco_turista;
        $this->cpf_turista = $cpf_turista;
        $this->idade_turista = $idade_turista;
    }

    public function Comer(){

    }
    public function Visitar(){

    }
    public function Nadar(){

    }
}

class Lugares{
    private $nome_lugar;
    private $pais_lugar;
    private $estado_lugar;
    private $cidade_lugar;

    public function __construct($nome_lugar, $pais_lugar, $estado_lugar, $cidade_lugar){
        $this->nome_lugar = $nome_lugar;
        $this->pais_lugar = $pais_lugar;
        $this->estado_lugar = $estado_lugar;
        $this->cidade_lugar = $cidade_lugar;
    }

    public function CoisasTipicas(){

    }

}
?>