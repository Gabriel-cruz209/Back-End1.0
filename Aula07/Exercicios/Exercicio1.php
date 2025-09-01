<?php

// Crie uma classe chamada Carro com os atributos privados marca e
// modelo.
// o Implemente os métodos setMarca, getMarca, setModelo e getModelo.
// o Crie um objeto da classe e use os setters para atribuir valores
// e os getters para exibir os dados.

class Carro{
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo){
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }


    public function setMarca($marca){
        $this->marca = ucwords(strtolower($marca));
    }
    
    public function getMarca(){
        return $this->marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

$carro1 = new Carro('Toyota', "adad");
echo"Marca: {$carro1->getMarca()} \n Modelo: {$carro1->getModelo()}";

?>