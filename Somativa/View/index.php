<?php
require_once __DIR__ . '/../Controller/livroController.php';

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
    <style>
:root{
    --bg:#F7F6F3;
    --card:#ffffff;
    --muted:#6B6B6B;
    --accent:#2B6CB0;
    --accent-2:#2F855A;
    --border:rgba(16,24,40,0.06);
    --radius:10px;
    --max-width:1100px;
}

/* Reset mínimo */
*{box-sizing:border-box}
html,body{height:100%}
body{
    margin:0;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background:var(--bg);
    color:#0F172A;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
    line-height:1.45;
}

/* Layout centralizado */
header{background:transparent;padding:36px 16px 12px}
header h1{
    margin:0;
    font-size:1.6rem;
    letter-spacing:0.4px;
    font-weight:700;
    color:var(--accent);
}

main{
    max-width:var(--max-width);
    margin:24px auto;
    padding:20px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:28px;
}

.contaier, .lista-container{
    background:var(--card);
    border:1px solid var(--border);
    border-radius:var(--radius);
    padding:18px;
    box-shadow:0 6px 18px rgba(11,15,24,0.04);
}

/* Formulários */
form{display:flex;flex-direction:column;gap:10px}
input[type="text"], input[type="number"], input[type="date"], select{
    padding:10px 12px;
    border:1px solid rgba(11,15,24,0.08);
    border-radius:8px;
    background:transparent;
    font-size:0.95rem;
}
input:focus, select:focus{outline:2px solid rgba(43,108,176,0.12);border-color:var(--accent)}

button{
    background:var(--accent);
    color:white;
    border:none;
    padding:10px 14px;
    border-radius:8px;
    cursor:pointer;
    font-weight:600;
}
button:hover{transform:translateY(-1px);box-shadow:0 6px 12px rgba(43,108,176,0.12)}

a{color:var(--muted);text-decoration:none;font-size:0.95rem}

/* Lista / tabela */
.lista-container h2{margin-top:0;margin-bottom:12px}
table{width:100%;border-collapse:collapse;font-size:0.95rem}
thead th{ text-align:left;padding:10px 8px;color:var(--muted);font-weight:600;border-bottom:1px solid var(--border)}
tbody td{padding:12px 8px;border-bottom:1px solid rgba(11,15,24,0.04)}
tbody tr:hover{background:linear-gradient(180deg, rgba(43,108,176,0.03), transparent)}

.actions form{display:inline}

/* Mobile */
@media (max-width:900px){
    main{grid-template-columns:1fr; padding:16px}
}

/* Pequenas utilidades */
.muted{color:var(--muted);font-size:0.9rem}
.card{background:var(--card);border-radius:8px;padding:12px;border:1px solid var(--border)}

/* Acessibilidade */
button:focus, a:focus{outline:3px solid rgba(47,133,90,0.14);outline-offset:2px}

/* Branding opcional */
header .logo{font-family: Georgia, 'Times New Roman', serif;font-size:1.1rem;color:var(--accent-2)}

/* Pequeno ajuste para inputs e botões inline nas tabelas */
table button{padding:8px 10px;border-radius:6px;font-weight:600}
    </style>
</head>
<body>
    <header>
        <h1>Livria Cruz</h1>
    </header>
    <main>
        <div class="contaier">
            <?php if ($livroParaEditar): ?>
                <h2>Editar Livro</h2>
                <form method="POST">
                    <input type="hidden" name="acao" value="atualizar">
                    <input type="hidden" name="tituloOriginal" value="<?php echo htmlspecialchars($livroParaEditar->getTitulo()); ?>">
                    <input type="text" name="titulo" placeholder="Titulo:" value="<?php echo htmlspecialchars($livroParaEditar->getTitulo()); ?>" required>
                    <input type="text" name="autor" placeholder="Autor: " value="<?php echo htmlspecialchars($livroParaEditar->getAutor()); ?>" required>
                    <select name="genero" required>
                        <option value="<?php echo htmlspecialchars($livroParaEditar->getGenero()); ?>">Selecione o genero</option>
                        <option value="Romance">Romance</option>
                        <option value="Biografia">Biografia</option>
                        <option value="Poesia">Poesia</option>
                        <option value="Fantasia">Fantasia</option>
                        <option value="Ficcao">Ficção Cientifica</option>
                    </select>
                    <input type="date" name="ano" placeholder="Ano de Publicação: " value="<?php echo htmlspecialchars($livroParaEditar->getAno_public()); ?>" required>
                    <input type="number" name="quantidade" placeholder="Quantidade em Estoque:" value="<?php echo htmlspecialchars($livroParaEditar->getQtde()); ?>" required>
                    <button type="submit">Atualizar</button>
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Cancelar</a>
                </form>
                <?php else: ?>
                    <h2>Cadastrar Livro</h2>
                    <form method="POST">
                        <input type="hidden" name="acao" value="salvar">
                        <input type="text" name="titulo" placeholder="Titulo do Livro: " required>
                        <input type="text" name="autor" placeholder="Nome do autor: " required>
                        <select name="genero" required>
                            <option value="">Selecione o genero</option>
                            <option value="Romance">Romance</option>
                            <option value="Biografia">Biografia</option>
                            <option value="Poesia">Poesia</option>
                            <option value="Fantasia">Fantasia</option>
                            <option value="Ficcao">Ficção Cientifica</option>
                        </select>
                        <input type="date" name="ano" placeholder="Ano de Publicação: " required>
                        <input type="number" name="quantidade" placeholder="Quantidade de Livros: " required>
                        <button type="submit">Cadastrar</button>
                    </form>
                    <?php endif;?>
        </div>

        <div class="lista-container">
            <h2>Lista de Livros</h2>
            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Genero</th>
                        <th>Ano</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $livro): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($livro->getTitulo()); ?></td>
                            <td><?php echo htmlspecialchars($livro->getAutor()); ?></td>
                            <td><?php echo htmlspecialchars($livro->getGenero()); ?></td>
                            <td><?php echo htmlspecialchars($livro->getAno_public()); ?></td>
                            <td><?php echo htmlspecialchars($livro->getQtde()); ?></td>

                            <td>
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="acao" value="editar">
                                    <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                    <button type="submit">Editar</button>
                                </form>
                                <form method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este livro?');">
                                    <input type="hidden" name="acao" value="deletar">
                                    <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>