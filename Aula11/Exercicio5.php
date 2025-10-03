<?php 

// Cenário 5 – Analise o problema com linguagem natural
// "Um sistema de biblioteca deve permitir que usuários (alunos e professores)
// façam empréstimos de livros e revistas."

//Biblioteca, Usuarios, Itens Emprestados -> Classe
//Emprestar, Permitir -> Metodo

class SistemaBiblioteca{
    private $nome_biblioteca;
    private $endereco_biblioteca;
    private $telefone_biblioteca;

    public function __construct($nome_biblioteca, $endereco_biblioteca, $telefone_biblioteca){
        $this->nome_biblioteca = $nome_biblioteca;
        $this->endereco_biblioteca = $endereco_biblioteca;
        $this->telefone_biblioteca = $telefone_biblioteca;
    }
    public function RegistrarEmpretimo(){
        echo "Registrando empréstimo...\n";
    }
}

class Usuarios{
    private $nome_usuario;
    private $cpf_usuario;
    private $tipo_usuario;

    public function __construct($nome_usuario, $cpf_usuario, $tipo_usuario){
        $this->nome_usuario = $nome_usuario;
        $this->cpf_usuario = $cpf_usuario;
        $this->tipo_usuario = $tipo_usuario;
    }

    public function SolicitarEmprestimo(){
        echo "Usuário solicitando empréstimo...\n";
    }
    public function devolverItem(){
        echo "Usuário devolvendo item...\n";
    }
}

class ItensEmprestados{
    private $titulo_item;
    private $autor_item;
    private $tipo_item;

    public function __construct($titulo_item, $autor_item, $tipo_item){
        $this->titulo_item = $titulo_item;
        $this->autor_item = $autor_item;
        $this->tipo_item = $tipo_item;
    }

    public function emprestarItem(){
        echo "Emprestando item...\n";
    }
    public function devolverItem(){
        echo "Devolvendo item...\n";
}}

class Emprestimo{
    private $data_emprestimo;
    private $data_devolucao;
    private $status_emprestimo;

    public function __construct($data_emprestimo, $data_devolucao, $status_emprestimo){
        $this->data_emprestimo = $data_emprestimo;
        $this->data_devolucao = $data_devolucao;
        $this->status_emprestimo = $status_emprestimo;
    }

    public function finalizarEmprestimo(){
        echo "Finalizando empréstimo...\n";
    }
}
?>