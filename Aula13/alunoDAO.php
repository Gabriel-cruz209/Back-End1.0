<?php

class AlunoDAO{ //Classe DAO(Data Access Object) para manipulação das funcões de CRUD (create, read, update e delete)
    private $alunos = [];// Array $alunos para armazenamento dos objetos a serem manipulados,antes de serem enviados ao banco de dados.Foi criado vazio inicialmente

    public function criarAlunos(Aluno $aluno){ // Metodo para criar um objeto no array alunos -> Create
        $this->alunos[$aluno->getId()] = $aluno;
    }
    
    public function lerAlunos(){ //Metodo para leros dados d um objeto criado --> read
        return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso){// Metodos para atualizar os dados de um objeto ja criado --> update
        if(isset($this->alunos[$id])) {
            $this-> alunos[$id] -> setNome($novoNome);
            $this-> alunos[$id] -> setCurso($novoCurso);
        }
    }

    public function excluirAlunos($id){ //Metodo para excluir um objeto ja criado --> delete
        unset($this->alunos[$id]);
    }
}


?>