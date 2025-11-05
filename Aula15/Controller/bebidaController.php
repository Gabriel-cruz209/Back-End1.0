<?php

require_once __DIR__ . "/../Model/bebidaDAO.php";
require_once __DIR__ . "/../Model/bebida.php";

class BebidaController{
    private $dao;

    //Constructor: cria um objeto DAO(responsavel por salvar e carregar)
    public function __construct() {
        $this->dao = new bebidaDAO();
    }

    //Lista todas as bebidas
    public function ler(){
        return $this->dao->lerBebidas();
    }

    //cadastrar novas bebidas
    public function criar($nome, $categoria, $volume, $valor, $qtde){
        //Gera ID automaticamente com base no timeskip(Exemplo simples)
        $nome = time();
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde );
        $this->dao->criarBebidas($bebida);

    }

    //Atualiza bebida exitente
    public function atualizar($nome, $valor, $qtde){
        $this->dao->atualizarBebidas($nome, $valor, $qtde);
    }

    //Excluir bebida
    public function deletar($nome){
        $this->dao->excluirBebibas($nome);
    }
}

?>