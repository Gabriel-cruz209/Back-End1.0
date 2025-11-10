<?php

class Bebida{
    private $nome;
    private $categoria;
    private $volume;
    private $valor;
    private $qtde;

    public function __construct($nome,$categoria,$volume,$valor,$qtde){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->volume = $volume;
        $this->valor = $valor;
        $this->qtde = $qtde;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function setVolume($volume){
        $this->volume = $volume;
    }

    public function setValor($valor){
        $this->valor = abs ((int)$valor);
    }

    public function setQtde($qtde){
        $this->qtde = abs ((int)$qtde);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getQtde(){
        return $this->qtde;
    }
}


?>