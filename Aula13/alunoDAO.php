<?php

class AlunoDAO{ //Classe DAO(Data Access Object) para manipulação das funcões de CRUD (create, read, update e delete)
    private $alunos = [];// Array $alunos para armazenamento dos objetos a serem manipulados,antes de serem enviados ao banco de dados.Foi criado vazio inicialmente
    private $arquivo = "alunos.json"; //Cria o arquivo json para que os dados sejam armazenados

    // Construtor AlunoDAO --> carrega os dados do arquivo json ao iniciar a aplicação

    public function __construct(){
        if(file_exists($this->arquivo)){
            //Lê o conteudo do arquivo caso ele já exista
            $conteudo = file_get_contents($this->arquivo);// Atribui as informaçoes do arquivo existentes á variavel $conteudo

            $dados = json_decode($conteudo,true); //Converter um json em um array associativo

            if($dados){ // Verifica se o array é nulo ou falso,caso seja valido e contenha conteudo, ele prossgue para a logica detro do if
                foreach($dados as $id => $info){ // Percorre o array $dados relacionando a chave e valor
                    $this->alunos[$id] = new Aluno ( // Cria um novo objeto já com as chaves e valores associados
                        $info['id'],
                        $info['nome'],
                        $info['curso'],
                    );
                }
            }
        }
    }

    //Metodo Auxiliar -> para salvar o array $alunos no arquivo JSON

    private function salvarEmArquivos(){
        $dados = [];

        // Transform os objetos em arrays convencionais
        foreach($this->alunos as $id => $aluno){
            $dados[$id] = [
                'id' => $aluno -> getId(),
                'nome' => $aluno -> getNome(),
                'curso' =>$aluno -> getCurso(),
            ];
        }
        // Converte para JSON formatado e grava os arquivos
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function criarAlunos(Aluno $aluno){ // Metodo para criar um objeto no array alunos -> Create
        $this->alunos[$aluno->getId()] = $aluno;
        $this->salvarEmArquivos();
    }
    
    public function lerAlunos(){ //Metodo para leros dados d um objeto criado --> read
        return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso){// Metodos para atualizar os dados de um objeto ja criado --> update
        if(isset($this->alunos[$id])) {
            $this-> alunos[$id] -> setNome($novoNome);
            $this-> alunos[$id] -> setCurso($novoCurso);
        }
        $this->salvarEmArquivos();
    }

    public function excluirAlunos($id){ //Metodo para excluir um objeto ja criado --> delete
        unset($this->alunos[$id]);
        $this->salvarEmArquivos();
    }
}


?>