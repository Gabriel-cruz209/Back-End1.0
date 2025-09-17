<?php
//Polimorfismo
//O termo polimorfismo significa"Varias formas".
//Associando isso a programação orientada a objetos, oconceito se trata de varias classes e suas instancias(objetos) respondendo a um mesmo metodo de formas diferentes.
//No exemplo da interface da Aula09, temos um metodo CalcularArea() que corresponde de forma diferente a classe Quadrado, a classe Pentagonoe a classe Circulo.
//Isso quer dizer que a função é a mesma - calcular area da forma geometrica - mas a operação muda de acordo com a figura.

//Crie um metodo chamado "mover()", aonde ele responde de varias formas diferentes, para as classes: Carro, Avião, Barco, e Elevador. Dica:Utilize interfaces

namespace Aula10;
Interface Veiculo{
    public function mover();
}

class Carro implements Veiculo{
    public $nome;
    public $marca;

    public function __construct($nome,$marca){
        $this->nome = $nome;
        $this->marca = $marca;
    }
    public function mover(){
        echo"O Carro {$this->nome} da marca {$this->marca} anda \n";
    }
}

class Aviao implements Veiculo{
    public $nome;
    public $marca;

    public function __construct($nome,$marca){
        $this->nome = $nome;
        $this->marca = $marca;
    }
    public function mover(){
        echo"O Avião {$this->nome} da marca {$this->marca} voa \n";
    }
}

class Barco implements Veiculo{
    public $nome;
    public $marca;
    public function __construct($nome,$marca){
        $this->nome = $nome;
        $this->marca = $marca;
    }
    public function mover(){
        echo"O Barco {$this->nome} da marca {$this->marca} navega \n";
    }
}

class Elevador implements Veiculo{
    public $nome;
    public $marca;

    public function __construct($nome,$marca){
        $this->nome = $nome;
        $this->marca = $marca;
    }
    public function mover(){
        echo"O elevador {$this->nome} da marca {$this->marca} sobe ou desce";
    }
}

$carro1 = new Carro(readline("Digite o nome: "), readline("Digite a marca: "));
$carro1->mover();

?>