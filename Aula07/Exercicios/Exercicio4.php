<?php

// Crie uma classe Produto com os atributos privados nome, preco e
// estoque.
// o Implemente os setters e getters.
// o Faça um objeto da classe e use os setters para definir os
// valores.
// o Exiba com os getters uma frase como:
// O produto X custa R$ Y e possui Z unidades em estoque.

class Produto{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome,$preco,$estoque){
        $this->setNome($nome);
        $this->setpreco($preco);
        $this->setEstoque($estoque);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getEstoque(){
        return $this->estoque;
    }
}

$produto1 = new Produto('relogio', 10, 10);


$produt1 -> setNome('maquina-lavar');
$produto1 -> setPreco(20);
$produto1 -> setEstoque(30);

echo" O produto {$produto1->getNome()} custa R$ {$produto1->getPreco()} e possui {$produto1->getEstoque()} unidades em estoque.";
?>