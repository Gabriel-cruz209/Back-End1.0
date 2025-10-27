
<?php 

require_once "crud.php";
require_once "alunoDAO.php";


$dao = new AlunoDAO();// Objeto da classe AlunoDAO para testar os metodos CRUD

//CREATE
$dao->  criarAlunos( new Aluno(1,"Josias","Panificação") );
$dao->  criarAlunos(new Aluno(2,"Victor Hugo","Manicure") );
$dao->  criarAlunos(new Aluno(3,"Beatriz","Eletricista") );
$dao->  criarAlunos(new Aluno(4,"Aurora","Arquitetura") );
$dao->  criarAlunos(new Aluno(5,"Oliver","Gestão") );
$dao->  criarAlunos(new Aluno(6,"Amanda","Luta") );
$dao->  criarAlunos(new Aluno(7,"Geysa","Engenharia") );
$dao->  criarAlunos(new Aluno(8,"Joab","Eletrica") );
$dao->  criarAlunos(new Aluno(9,"Miguel","Streamer") );

//READ
echo"Listagem Inicial\n";
foreach($dao->lerAlunos() as $aluno){
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

//UPDATE
$dao->atualizarAlunos(1,"Jozias","Tecnico em Borracharia");
$dao->atualizarAlunos(7,"Clotilde","Engenharia");
$dao->atualizarAlunos(8,"Joana","Eletrica");
$dao->atualizarAlunos(9,"Miguel","Designer");
$dao->atualizarAlunos(6,"Amanda","Logistica");
$dao->atualizarAlunos(5,"Oliver","Eletrica");

echo"\n Após atualização: ";
foreach($dao->lerAlunos() as $aluno) {
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

// DELETE
$dao->excluirAlunos(1);
$dao->excluirAlunos(7);
$dao->excluirAlunos(4);
echo"\n Após exclusão: ";
foreach($dao->lerAlunos() as $aluno){
    echo"{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}


?>