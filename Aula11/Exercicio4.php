<?php

// Cenário 4 – Ciclo da Vida
// Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
// sangue para ajudar outras.

//Classes: Terra, Pessoas, Escolha, BancodeSangue
//metodos: informarAtividades, getDescricao, getTipo, visitar, comer, nadar

//Relacionamento entre classes:
//Terra -> Pessoas / composição
//pessoas -> Terra / composição
//Pessoas -> Escolha / composição
//pessoas -> BancodeSangue / agregação



class Pessoas{
    private $nome_pessoa;
    private $idade_pessoa;
    private $cpf_pessoa;

    public function __construct($nome_pessoa, $idade_pessoa, $cpf_pessoa){
        $this->nome_pessoa = $nome_pessoa;
        $this->idade_pessoa = $idade_pessoa;
        $this->cpf_pessoa = $cpf_pessoa;
    }

    public function engravidar(){
        echo "Pessoa engravidando...\n";
    }
    public function nascer(){
        echo "Pessoa nascendo...\n";
    }
    public function crescer(){
        echo "Pessoa crescendo...\n";
    }
    public function fazerEscolha(){
        echo "Pessoa fazendo escolha...\n";
    }
    public function doarSangue(){
        echo "Pessoa doando sangue...\n";
    }
}

class Escolha{
    private $descricao_escolha;
    private $consequencia_escolha;

    public function __construct($descricao_escolha, $consequencia_escolha){
        $this->descricao_escolha = $descricao_escolha;
        $this->consequencia_escolha = $consequencia_escolha;
    }

    public function realizarEscolha(){
        echo "Escolha sendo realizada...\n";
    }
}

class BancodeSangue{
    private $local_banco;
    private $capacidade_banco;

    public function __construct($local_banco, $capacidade_banco){
        $this->local_banco = $local_banco;
        $this->capacidade_banco = $capacidade_banco;
    }

    public function armazenarSangue(){
        echo "Banco de sangue armazenando sangue...\n";
    }
}
?>