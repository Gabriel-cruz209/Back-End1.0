<?php

// Cenário 6 – Leia o enunciado do problema
// "Um sistema de cinema deve permitir que clientes comprem ingressos para
// sessões de filmes."

//Classes-SistemaCinema,Clientes,filme,sessao,ingresso,sala
//Metodo-?Permitir, Comprar, Finalizar,reservar, liberar,vender

//Relacionamento entre classes:
//Clientes -> sistemaCinema / associação
//Clientes -> filme / associação
//Clientes -> sessao / agregação
//sistemaCinema -> filme / agregação
//sistemaCinema -> sessao / composição

class Clientes{
    private $nome_cliente;
    private $cpf_cliente;
    private $idade_cliente;

    public function __construct($nome_cliente, $cpf_cliente, $idade_cliente){
        $this->nome_cliente = $nome_cliente;
        $this->cpf_cliente = $cpf_cliente;
        $this->idade_cliente = $idade_cliente;
    }

    public function comprarIngresso(){
        echo "Cliente comprando ingresso...\n";
    }
}

class sistemaCinema{
    private $nome_sistema;
    private $versao_sistema;

    public function __construct($nome_sistema, $versao_sistema){
        $this->nome_sistema = $nome_sistema;
        $this->versao_sistema = $versao_sistema;
    }

    public function venderIngresso(){
        echo "Vendendo ingresso...\n";
    }
    public function exibirSessoes(){
        echo "Exibindo sessões...\n";
    }
}

class filme{
    private $nome_filme;
    private $duracao_filme;
    private $dublagem_filme;

    public function __construct($nome_filme, $duracao_filme, $dublagem_filme){
        $this->nome_filme = $nome_filme;
        $this->duracao_filme = $duracao_filme;
        $this->dublagem_filme = $dublagem_filme;
    }

    public function getDetalhes(){
        return "Nome: $this->nome_filme, Duração: $this->duracao_filme, Dublagem: $this->dublagem_filme";
    }
    public function setDetalhes($nome_filme, $duracao_filme, $dublagem_filme){
        $this->nome_filme = $nome_filme;
        $this->duracao_filme = $duracao_filme;
        $this->dublagem_filme = $dublagem_filme;
    }

}
class sessao{
    private $horario_sessao;
    private $data_sessao;
    private $filme_sessao;

    public function __construct($horario_sessao, $data_sessao, $filme_sessao){
        $this->horario_sessao = $horario_sessao;
        $this->data_sessao = $data_sessao;
        $this->filme_sessao = $filme_sessao;
    }

    public function reservarAssento(){
        echo "Assento reservado...\n";
    }
    public function liberarAssento(){
        echo "Assento liberado...\n";
    }
}

class ingresso{
    private $tipo_ingresso;
    private $preco_ingresso;
    private $sessao_ingresso;

    public function __construct($tipo_ingresso, $preco_ingresso, $sessao_ingresso){
        $this->tipo_ingresso = $tipo_ingresso;
        $this->preco_ingresso = $preco_ingresso;
        $this->sessao_ingresso = $sessao_ingresso;
    }
    public function validarIngresso(){
        echo "Validando ingresso...\n";
    }
}

class sala{
    private $numero_sala;
    private $capacidade_sala;
    private $tipo_sala;

    public function __construct($numero_sala, $capacidade_sala, $tipo_sala){
        $this->numero_sala = $numero_sala;
        $this->capacidade_sala = $capacidade_sala;
        $this->tipo_sala = $tipo_sala;
    }

    public function verificarDisponibilidade(){
        echo "Verificando disponibilidade...\n";
    }
}

?>