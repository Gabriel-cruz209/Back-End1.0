<?php 

require_once "crud.php";
require_once "alunoDAO.php";

$dao = new AlunoDAO();// Objeto da classe AlunoDAO para testar os metodos CRUD

//CREATE
$dao->  criarAlunos( new Aluno(1,"Josias","Panificação") );
$dao->  criarAlunos(new Aluno(2,"Victor Hugo","Manicure") );
$dao->  criarAlunos(new Aluno(3,"Beatriz","Eletricista") );

//READ
echo"Listagem Inicial\n";
foreach($dao->lerAlunos() as $aluno){
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

//UPDATE
$dao->atualizarAlunos(1,"Jozias","Tecnico em Borracharia");
echo"\n Após atualização: ";
foreach($dao->lerAlunos() as $aluno) {
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

// DELETE
$dao->excluirAlunos(1);
echo"\n Após exclusão: ";
foreach($dao->lerAlunos() as $aluno){
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}


?>