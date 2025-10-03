<?php

// Cenário 6 – Leia o enunciado do problema
// "Um sistema de cinema deve permitir que clientes comprem ingressos para
// sessões de filmes."

//Cinema,Clientes
//Permitir, Comprar

class Cinema{
    private $nome_cinema;
    private $endereco_cinema;
    private $telefone_cinema;

    public function __construct($nome_cinema, $endereco_cinema, $telefone_cinema){
        $this->nome_cinema = $nome_cinema;
        $this->endereco_cinema = $endereco_cinema;
        $this->telefone_cinema = $telefone_cinema;
    }

    public function Permitir(){

    }
    public function Comprar(){

    }
}

class Clientes{
    private $nome_cliente;
    private $cpf_cliente;
    private $idade_cliente;

    public function __construct($nome_cliente, $cpf_cliente, $idade_cliente){
        $this->nome_cliente = $nome_cliente;
        $this->cpf_cliente = $cpf_cliente;
        $this->idade_cliente = $idade_cliente;
    }
}
?>