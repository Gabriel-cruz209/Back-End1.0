<?php
require_once __DIR__ . '/../Model/livroDAO.php';
require_once __DIR__ . '/../Model/livro.php';

class LivroController{
    private $dao;

    public function __construct(){
        $this->dao = new LivroDAO();
    }

    public function ler(){
        return $this->dao->lerLivro();
    }

    public function criar($titulo, $genero, $qtde, $ano_public, $autor){
        $livro = new Livro($titulo,$genero, $autor, $ano_public, $qtde);
        $this->dao->criarLivro($livro);
    }

    public function atualizar($tituloOriginal, $novoTitulo, $genero, $autor, $qtde, $ano_public){
        $this->dao->atualizarLivro($tituloOriginal, $novoTitulo, $genero, $ano_public,$autor, $qtde);
    }

    public function deletar($titulo){
        $this->dao->deletarLivro($titulo);
    }
}

?>