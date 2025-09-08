<?php

/*
MODFICADORES DE ACESSO:
Existem 3 tipos: Public, Private e Protected.
Public NomeDoAtributo: Métodos e atributos publicos.

Private NomeDoAtributo: Métodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

Protected NomeDoAtributo: Métodos e atributos protegidos para acesso somente da classes e de suas classes filhas.

Pacotes(packeges): Sintage logo no início do código, que atribui de onde os arquivos pertencem, ou seja, caminhos de pastas em que ele está contidp. Exemplo:
namespace Aula 09;

Caso tenham mais arquivos que formam o BackEnd de uma pagina WEB e possuem a mesma raiz, o naespace será o mesmo
*/

namespace Aula_09;

/* 
Interfaces: é um recursono qual garante que obrigatoriamente a classe tenha que construir algum metodo previamente determinado. Funciona como uma promessa ou contrato.
Exemplo: Configuraçmos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o método "pagar()"
*/

interface Pagamento{ //Interface de contrato de pagamento
    public function pagar($valor);
    
}

class CartaoDeCredito implements Pagamento{ //Criando classe CartaodeCredito com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        echo "Pagemento realizado com o cartao de crédito, valor $valor\n";
    }
}

class PIX implements Pagamento { //Criando classe PIX com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        echo "Pagamento realizado com PIX, valor $valor\n";
    }
}

class DinheiroEspecie implements Pagamento { //Criando classe DinheiroEspecie com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        $desconto = $valor * 0.1;
        $avista = $valor - $desconto;
        echo "Pagamento realizado com dinheiro em espécie, valor $avista\n";

    }

}
/*
Testando Intefaces: deve-se criar objetos associados a cada classse que será testada. Exemplo:
*/

$cred = new CartaoDeCredito(); // Criando objeto

echo "Testando cartão de crédito para pagamento: ".$cred->pagar(250);

//Neste exemplo criamos um objeto chmado "cred" para a classe "CartaoDeCredito" e depois chmadas o metodos "pagar()" para este objeto, passando R$250 como parametro

//Crie objetos para as classes "PIX" e "dinheiroEspecie" e teste o metodo "pagar()" para cada um deles,passando como parametro os valores R$65 e R$320 respectivamente
$pix = new PIX();
echo"Testando Pix para pagamento: ".$pix->pagar(65);

$dinheiro = new DinheiroEspecie();
echo"Testando Dinheiro Especie Pagamento: ".$dinheiro->pagar(320);

//Crie uma interface simples

//Crie uma interface chamada "Forma" que obrigue qualquer classe a ter um metodo calcularArea.
//depois,crie as classes "Quadrado" e "Circulo" que implementam a interface

//QQuadrado = l * l
//Circulo = pi * r2

interface Forma{
    public function calcularArea();
}

class Quadrado implements Forma{
    public $lado;
    public function __construct($lado){
        $this->lado = $lado;
    }
    public function calcularArea(){
        return $this->lado*$this->lado;
    }
}
class Circulo implements Forma{
    public $raio;
    public function __construct($raio){
        $this->raio = $raio;
    }
    public function calcularArea(){
        return pi() * ($this->raio*$this->raio);
    }
}



//Crie uma class pentagono, e calcule a area do mesmo.
class Pentagono implements Forma{
    public $lado;
    public $apotema;

    public function __construct($lado,$apotema){
        $this->lado = $lado;
        $this->apotema = $apotema;
    }

    public function calcularArea(){
        return (5 * $this->lado) * $this->apotema / 2;
    }
}

//crie uma class heptagono,e calcule a area do mesmo
class Hexagono implements Forma{
    public $lado;
    public $apotema;

    public function __construct($lado, $apotema){
        $this->lado = $lado;
        $this->apotema = $apotema;
    }

    public function calcularArea(){
        return (6 * $this->lado) * $this->apotema / 2;
        
    }
}

$quadrado = new Quadrado(readline("Digite o lado do Quadrado: "));
echo"A area do quadrado é: ".$quadrado->calcularArea()."\n";

$circulo = new Circulo(readline("Digite o raio do Circulo:"));
echo "A area do circulo é: ".number_format($circulo->calcularArea())."\n";

$Pentagono = new Pentagono(readline("Digite o lado do Penagono: "),readline("Digite o apotema do Pentagono: "));
echo"A area do Pentagono é: ".$Pentagono->calcularArea()."\n";

$Hexagono = new Hexagono(readline("Digite o lado do Hexagono: "),readline("Digite a apotema do Hexagono: "));
echo"A area do Hexagono é: ".$Hexagono->calcularArea()."\n";
