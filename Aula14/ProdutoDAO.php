<?php
namespace Aula14;
class ProdutoDAO{
    private $produtos = [];
    private $arquivos = "produtos.json";

    public function __construct(){
        if(file_exists($this->arquivos)){
            $conteudo = file_get_contents($this->arquivos);

            $dados = json_decode($conteudo, true);

            if($dados){
                foreach($dados as $codigo => $info){
                    $this->produtos[$codigo] = new Produto(
                        $info['codigo'],
                        $info['nome'],
                        $info['preco'],
                    );
                }
            }
        }
    }

    private function salvarArquivos(){
        $dados = [];

        foreach($this->produtos as $codigo => $produto){
            $dados[$codigo] = [
                'codigo' => $produto -> getCodigo(),
                'nome' => $produto -> getNome(),
                'preco' => $produto -> getPreco(),
            ];
        }
        file_put_contents($this->arquivos, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function criarProduto(Produto $produto){
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarArquivos();
    }

    public function lerProdutos() {
        return $this->produtos;
    }

    public function atualizarProdutos($codigo, $novoNome, $novoPreco){
        if(isset($this->produtos[$codigo])) {
            $this->produtos[$codigo] -> setNome($novoNome);
            $this->produtos[$codigo] -> setPreco($novoPreco);
        }
        $this->salvarArquivos();
    }

    public function excluirProdutos($codigo){
        unset($this->produtos[$codigo]);
        $this->salvarArquivos();
    }

}


?>