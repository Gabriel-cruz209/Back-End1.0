<?php
require_once "livro.php";
require_once "connection.php";

class LivroDAO{
    private $conn;

    public function __construct(){
        $this->conn = Connection::getInstance();

        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS livro(
                id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
                titulo varchar(200) not null,
                autor varchar(150) not null,
                ano int not null,
                genero varchar(100) not null,
                quantidade int not null
            )
        ");
    }

    public function criarLivro(Livro $livro){
        $stmt = $this->conn->prepare("
            INSERT INTO livro (titulo, autor, ano, genero, quantidade) 
            VALUES (:titulo, :autor, :ano, :genero, :quantidade)
        ");
        $stmt->execute([
            ':titulo' => $livro->getTitulo(),
            ':autor' => $livro->getAutor(),
            ':ano' => $livro->getAno_public(),
            ':genero' => $livro->getGenero(),
            ':quantidade' => $livro->getQtde()
        ]);
    }

    public function lerLivro() {
        $stmt = $this->conn->query("SELECT * FROM livro ORDER BY titulo");
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Livro (
                    $row['titulo'],
                    $row['genero'],
                    $row['autor'],
                    $row['ano'],
                    $row['quantidade']
            );
        }
        return $result;
    }

    public function atualizarLivro($tituloOriginal,$novoTitulo,$genero,$ano_public,$autor,$qtde){
        $stmt = $this->conn->prepare("
            UPDATE livro
            SET titulo = :novoTitulo, 
            genero = :genero,
            ano = :ano,
            quantidade = :qtde,
            autor = :autor
            WHERE titulo = :tituloOriginal
        ");
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':genero' => $genero,
            ':autor' => $autor,
            ':ano' => $ano_public,
            ':qtde' => $qtde,
            ':tituloOriginal' => $tituloOriginal
        ]);
    }

    public function deletarLivro($titulo){
        $stmt = $this->conn->prepare("DELETE FROM livro WHERE titulo = :titulo");
        $stmt->execute([':titulo' => $titulo]);
    }

    public function buscarPorNome($titulo){
        $stmt = $this->conn->prepare("SELECT * FROM livro WHERE titulo = :titulo LIMIT 1");
        $stmt->execute([':titulo' => $titulo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
            return new Livro(
                $row['titulo'],
                $row['genero'],
                $row['autor'],
                $row['ano'],
                $row['quantidade']
            );
        }
        return null;
    }
}

?>