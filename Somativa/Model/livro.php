<?php

class Livro{

    private $titulo;
    private $genero;
    private $autor;
    private $ano_public;
    private $qtde;

    public function __construct($titulo,$genero,$autor,$ano_public,$qtde){
        $this->titulo = $titulo;
        $this->ano_public = $ano_public;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->qtde = $qtde;
    }
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAno_public($ano_public){
        $this->ano_public = abs((int)$ano_public);
    }

    public function setAutor($autor){
        $this->autor = ucwords(strtolower($autor));
    }

    public function setQtde($qtde){
        $this->qtde = abs((int)$qtde);
    }

    public function setGenero($genero){
        $this->genero = ucwords(strtolower($genero));
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getAno_public(){
        return $this->ano_public;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getQtde(){
        return $this->qtde;
    }

}


?>