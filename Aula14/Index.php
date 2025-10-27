<?php
//Crie uma classe produtos com os atributos:codigo, nome e preço.Após
namespace Aula14;

require_once "CRU.php";
require_once "ProdutoDAO.php";

$dao = new ProdutoDAO();

//Create
$dao -> criarProduto(new Produto(1,"Tomate",4.99));
$dao -> criarProduto(new Produto(2,"Maça",3.99));
$dao -> criarProduto(new Produto(3,"Queijo brie",14.99));
$dao -> criarProduto(new Produto(4,"Iorgute Grego",2.99));
$dao -> criarProduto(new Produto(5,"Guarana Jesus",4.99));
$dao -> criarProduto(new Produto(6,"Bolacha Bono",3.99));
$dao -> criarProduto(new Produto(7,"Desinfetante Urca",16.99));
$dao -> criarProduto(new Produto(8,"Prestobarba Bic",2.99));

//read
echo"Listagem Inicial\n";
foreach($dao->lerProdutos() as $produto){
    echo"{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}";
}

//update
$dao->atualizarProdutos(7,"Desinfetante Barbarex", 16.99);

echo"\n Após atualização: ";
foreach($dao->lerProdutos() as $produto){
    echo"{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}";
}

//delete
$dao->excluirProdutos(1);
$dao->excluirProdutos(2);
echo"\n Após a Exclusão";
foreach($dao->lerProdutos() as $produto){
    echo"{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}";
}

?>