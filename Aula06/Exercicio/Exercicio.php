<?php

//Crie uma classe moto com ao menos 4 atributos sem a utilização d eum constructors

class moto{
    public $marca;
    public $modelo;
    public $ano;
    public $bateu;

    
}

$moto1 = new moto();
$moto1 -> marca = "honda";
$moto1 -> modelo = "titan";
$moto1 -> ano = 2020;
$moto1 -> bateu = false;

$moto2 = new moto();
$moto2 -> marca = "kawazaki";
$moto2 -> modelo = "ninja";
$moto2 -> ano = 2011;
$moto2 -> bateu = true;

$moto1 = new moto();
$moto1 -> marca = "Yamaha";
$moto1 -> modelo = "fazer";
$moto1 -> ano = 2024;
$moto1 -> bateu = true;

//Exercicios Construtores

    // public function __construct ($dia, $mes, $ano){
    //     $this -> dia = $dia;
    //     $this -> mes = $mes;
    //     $this -> ano = $ano;
    // }
    // public function __construct($nome, $idade, $cpf, $telefone, $endereço, $estado_civil, $sexo ){
    //     $this -> nome = $nome;
    //     $this -> idade = $idade;
    //     $this -> cpf = $cpf;
    //     $this -> telefone = $telefone;
    //     $this -> endereço = $endereço;
    //     $this -> estado_civil = $estado_civil;
    //     $this -> sexo = $sexo;
    // }

    // public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda){
    //     $this -> marca = $marca;
    //     $this -> nome = $nome;
    //     $this -> categoria = $categoria;
    //     $this -> data_fabricacao = $data_fabricacao;
    //     $this -> data_venda = $data_venda;
    // }
?>