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

    public function Amar(){

    }
    public function Comer(){

    }
}

class Caminho{
    private $tipo_caminho;
    private $distancia_caminho;
    private $dificuldade_caminho;

    public function __construct($tipo_caminho, $distancia_caminho, $dificuldade_caminho){
        $this->tipo_caminho = $tipo_caminho;
        $this->distancia_caminho = $distancia_caminho;
        $this->dificuldade_caminho = $dificuldade_caminho;
    }

    public function Chover(){

    }

}
?>