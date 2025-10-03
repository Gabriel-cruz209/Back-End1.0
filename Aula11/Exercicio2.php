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




}

class Lugares{
    private $nome_lugar;
    private $pais_lugar;
    private $estado_lugar;
    private $cidade_lugar;

    public function __construct($nome_lugar, $pais_lugar, $estado_lugar, $cidade_lugar){
        $this->nome_lugar = $nome_lugar;
        $this->pais_lugar = $pais_lugar;
        $this->estado_lugar = $estado_lugar;
        $this->cidade_lugar = $cidade_lugar;
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
}
?>