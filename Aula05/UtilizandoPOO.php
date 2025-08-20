<?php

class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_donos){
        $this ->marca = $marca;
        $this ->modelo = $modelo;
        $this -> ano = $ano;
        $this -> revisao = $revisao;
        $this -> N_donos = $N_donos;
    }
}

$carro1 = new Carro("Porsche", "911",2020, "false", 3);
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);
$carro3 = new Carro("Chevrolet", "Silverado", 2000, true, 2);
$carro4 = new Carro("Volkswagen", "Golf", 2015, false, 1);
$carro5 = new Carro("Toyota", "Corolla", 2018, true, 2);
$carro6 = new Carro("Ford", "Mustang", 2022, false, 1);

?>