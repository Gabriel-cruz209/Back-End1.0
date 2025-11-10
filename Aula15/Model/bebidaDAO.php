<?php

class BebidaDAO{
    private $bebidasArray = [];
    private $arquivosJson = 'bebidas.json';

    public function __construct(){
        if(file_exists("bebidas.json")) {
            $conteudoArquivo = file_get_contents($this->arquivosJson);

            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

            if($dadosArquivoEmArray){
                foreach($dadosArquivoEmArray as $nome => $info) {
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde'],
                    );
                }
            }
        }
    }

    private function salvarArquivos(){
        $dadosParaSalvar = [];

        foreach($this->bebidasArray as $nome => $bebida) {
            $dadosParaSalvar[$nome] = [
                'nome' => $bebida -> getNome(),
                'categoria' => $bebida -> getCategoria(),
                'volume' => $bebida -> getVolume(),
                'valor' => $bebida -> getValor(),
                'qtde' => $bebida -> getQtde(),
            ];
        }
        file_put_contents($this->arquivosJson, json_encode($dadosParaSalvar, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    //CREATE
    public function criarBebidas(Bebida $bebida){
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivos();
    }

    //UPDATE
    public function atualizarBebidas($nome, $novoValor, $novoQtde, $novoCategoria, $novoVolume, $novoNome){
        if(isset($this->bebidasArray[$nome])){
            $this->bebidasArray[$nome]->setValor($novoValor);
            $this->bebidasArray[$nome]->setQtde($novoQtde);
            $this->bebidasArray[$nome]->setNome($novoNome);
            $this->bebidasArray[$nome]->setVolume($novoVolume);
            $this->bebidasArray[$nome]->setCategoria($novoCategoria);
        }
        $this->salvarArquivos();
    }

    //READ
    public function lerBebidas(){
        return $this->bebidasArray;
    }

    //DELETE
    public function excluirBebibas($nome){
        unset($this->
        bebidasArray[$nome]);
        $this->salvarArquivos();
    }
}


?>