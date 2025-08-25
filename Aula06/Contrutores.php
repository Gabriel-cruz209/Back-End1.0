<?php

class produto{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    // metodos

    public function atualizarEstoque($qtde_vendas){
        $this -> qtde_estoque =  $this -> qtde_estoque - $qtde_vendas;
        return $this -> qtde_estoque;
    }

    //Criando Construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this -> nome = $nome;
        $this ->categoria = $categoria;
        $this ->fornecedor = $fornecedor;
        $this ->qtde_estoque = $qtde_estoque;
    }

}

//Criando objetos com construtor
$produto1 = new produto("suco Tang","bebidas","Mondelez", 200);
$produto2 = new produto("Energetico Monster","bebidas","Coca-cola", 150);

//Criando objetos sem construtor
// $produto1 = new produto();
// $produto1 -> nome = "Suco Tang";
// $produto1 -> categoria = "bebidas ";
// $produto1 -> fornecedor = "Mondelez";
// $produto1 -> qtde_estoque = 200;

// $produto2 = new produto();
// $produto2 -> nome = "Energetico Monster";
// $produto2 -> categoria = "bebidas ";
// $produto2 -> fornecedor = "Coca-cola";
// $produto2 -> qtde_estoque = 150;
?>