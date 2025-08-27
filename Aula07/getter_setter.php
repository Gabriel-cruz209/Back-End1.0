<?php

class pessoas{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;


    //Crie o construtor para a classe pessoa
    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha){
        $this -> setNome($nome);
        $this -> setCpf($cpf);
        $this -> setTelefone($telefone);
        $this -> setIdade($idade);
        $this -> email = $email;
        $this -> senha = $senha;
    }

    // getter e setter para $nome
    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    // getter e setter para $cpf
    public function setCpf($cpf){
        $this->cpf = preg_replace('/\D/','',$cpf);
    }

    public function getCpf(){
        return $this->cpf;
    }

    // getter e setter para $telefone
    public function setTelefone($telefone){
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }
    public function getTelefone(){
        return $this->telefone;
    }

    //getter e setter para $idade
    public function setIdade($idade){
        $this->idade = abs ((int)$idade);
    }

    public function getIdade(){
        return $this->idade;
    }
}

$aluno1 = new pessoas("GaBrieL SOareS","999.9.999-99","(19)98226-6854",-18,"gc572640@gmail.com","teste123");

echo $aluno1->getTelefone();
?>