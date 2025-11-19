<?php
require_once __DIR__.'../Controller/livroController.php';

$controller = new LivroController();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST[' titulo'],$_POST['genero'], $_POST['quantidade'], $_POST['ano'], $_POST['autor']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['titulo']);
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    } elseif ($_POST['acao'] === 'atualizar'){
        $controller->atualizar(
            $_POST['tituloOriginal'],
            $_POST['titulo'],
            $_POST['genero'],
            $_POST['autor'],
            $_POST['quantidade'],
            $_POST['ano']
        );
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    }
}

$livroParaEditar = null;
if(isset($_POST['acao']) && $_POST['acao'] === 'editar') {
    foreach($controller->ler() as $livro){
        if($livro->getTitulo() === $_POST['titulo']){
            $livroParaEditar = $livro;
            break;
        }
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <header></header>
    <main></main>
    <footer></footer>
</body>
</html>