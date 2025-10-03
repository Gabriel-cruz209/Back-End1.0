<?php

// Cenário 2 – Heróis e Personagens
// O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
// fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
// brinquedos às crianças.

//Herois, Lugares,crianças -> Classe
//Fazer, doar, ir -> metodos

class Heroi{
    private $nome_heroi;
    private $poder_heroi;
    private $nacionalidade_heroi;

    public function __construct($nome_heroi, $poder_heroi, $nacionalidade_heroi){
        $this->nome_heroi = $nome_heroi;
        $this->poder_heroi = $poder_heroi;
        $this->nacionalidade_heroi = $nacionalidade_heroi;
    }

    public function Treinar(){
        echo "Herói treinando...\n";
    }

    public function Doar(){
        echo "Herói DoandoBrinquedo...\n";
    }




}

class missao{
    private $descricao_missao;
    private $local_missao;
    private $data_missao;

    public function __construct($descricao_missao, $local_missao, $data_missao){
        $this->descricao_missao = $descricao_missao;
        $this->local_missao = $local_missao;
        $this->data_missao = $data_missao;
    }

    public function iniciarMissao(){
        echo "Missão iniciada...\n";
    }

    public function concluirMissao(){
        echo "Missão concluída...\n";
    }
}

class Crianca{
    private $nome_crianca;
    private $idade_crianca;
    private $cpf_crianca;
    
    public function __construct($nome_crianca, $idade_crianca, $cpf_crianca){
        $this->nome_crianca = $nome_crianca;
        $this->idade_crianca = $idade_crianca;
        $this->cpf_crianca = $cpf_crianca;
    }

    public function RecebrBrinquedo(){
        echo "Criança recebendo brinquedo...\n";
    }
}

class shopping{
    private $nome_shopping;
    private $endereco_shopping;
    private $telefone_shopping;

    public function __construct($nome_shopping, $endereco_shopping, $telefone_shopping){
        $this->nome_shopping = $nome_shopping;
        $this->endereco_shopping = $endereco_shopping;
        $this->telefone_shopping = $telefone_shopping;
    }

    public function receberDoacao(){
        echo "Shopping recebendo doação...\n";
    }
}



class Brinquedos{
    private $nome_brinquedo;
    private $tipo_brinquedo;
    private $faixa_etaria_brinquedo;

    public function __construct($nome_brinquedo, $tipo_brinquedo, $faixa_etaria_brinquedo){
        $this->nome_brinquedo = $nome_brinquedo;
        $this->tipo_brinquedo = $tipo_brinquedo;
        $this->faixa_etaria_brinquedo = $faixa_etaria_brinquedo;
    }
    public function getTipo(){
        return $this->tipo_brinquedo;
    }

}

class LocalTreinamento{
    private $nome_local;
    private $endereco_local;
    private $telefone_local;

    public function __construct($nome_local, $endereco_local, $telefone_local){
        $this->nome_local = $nome_local;
        $this->endereco_local = $endereco_local;
        $this->telefone_local = $telefone_local;
    }

    public function oferecerTreinamento(){
        echo "Local oferecendo treinamento...\n";
    }
}
?>