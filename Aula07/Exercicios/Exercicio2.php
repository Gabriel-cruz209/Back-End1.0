<?php

// Crie uma classe Pessoa com os atributos privados nome, idade e email.
// o Utilize os setters para preencher os dados de uma pessoa.
// o Em seguida, use os getters para exibir as informações dessa
// pessoa em formato de frase, por exemplo:


class Pessoa{
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setEmail($email);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        $this->idade = abs ((int)$idade);
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function exibirM(){
        return "O nome é $this->nome, tem anos $this->idade o email é $this->email.";
    }
}

$pessoa1 = new Pessoa("Samuel",22,"samuel@exemplo.com" );
// O nome é , tem anos e o email é .
?>