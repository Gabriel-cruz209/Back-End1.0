<?php

// Cenário 3 – Fantasia e Destino
// John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
// caminho, começa a chover, e eles precisam amar uns aos outros para superar as
// dificuldades. No fim da jornada, eles celebram ao comer juntos.

//Personagens, Caminho -> Classe
//Chover, Amar, Comer -> Metodos

class Personagem{
    private $nome_personagem;
    private $poder_personagem;
    private $nacionalidade_personagem;

    public function __construct($nome_personagem, $poder_personagem, $nacionalidade_personagem){
        $this->nome_personagem = $nome_personagem;
        $this->poder_personagem = $poder_personagem;
        $this->nacionalidade_personagem = $nacionalidade_personagem;
    }

    public function seguirJornada(){
        echo "Personagem seguindo a jornada...\n";
    }
    public function enfrentarDesafio(){
        echo "Personagem enfrentando desafio...\n";
    }

    public function celebrar(){
        echo "Personagens celebrando juntos...\n";
    }
}

class Jornada{
    private $local_jornada;
    private $distancia_jornada;
    private $dificuldade_jornada;

    public function __construct($local_jornada, $distancia_jornada, $dificuldade_jornada){
        $this->local_jornada = $local_jornada;
        $this->distancia_jornada = $distancia_jornada;
        $this->dificuldade_jornada = $dificuldade_jornada;
    }

    public function avancar(){
        echo "Jornada avançando...\n";
    }

}

class Clima{
    private $tipo_clima;
    private $temperatura_clima;
    private $umidade_clima;

    public function __construct($tipo_clima, $temperatura_clima, $umidade_clima){
        $this->tipo_clima = $tipo_clima;
        $this->temperatura_clima = $temperatura_clima;
        $this->umidade_clima = $umidade_clima;
    }

    public function mudarClima(){
        echo "Clima mudando...\n";
    }

}

class Dificuldade{
    private $nivel_dificuldade;
    private $descricao_dificuldade;

    public function __construct($nivel_dificuldade, $descricao_dificuldade){
        $this->nivel_dificuldade = $nivel_dificuldade;
        $this->descricao_dificuldade = $descricao_dificuldade;
    }

    public function superarDificuldade(){
        echo "Dificuldade aumentando...\n";
    }

}

class refeicao{
    private $tipo_refeicao;
    private $local_refeicao;
    private $hora_refeicao;

    public function __construct($tipo_refeicao, $local_refeicao, $hora_refeicao){
        $this->tipo_refeicao = $tipo_refeicao;
        $this->local_refeicao = $local_refeicao;
        $this->hora_refeicao = $hora_refeicao;
    }

    public function servirRefeicao(){
        echo "Refeição sendo servida...\n";
    }

}
?>