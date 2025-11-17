<?php
require_once __DIR__ . '/../controller/BebidaController.php';

$controller = new BebidaController();

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } elseif ($_POST['acao'] === 'atualizar') {
        
        $controller->atualizar(
            $_POST['nomeOriginal'],
            $_POST['nome'],
            $_POST['volume'],
            $_POST['categoria'],
            $_POST['valor'],
            $_POST['qtde']
        );
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

$bebidaParaEditar = null;
if (isset($_POST['acao']) && $_POST['acao'] === 'editar') {
    foreach ($controller->ler() as $bebida) {
        if ($bebida->getNome() === $_POST['nome']) {
            $bebidaParaEditar = $bebida;
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
    <title>Formulário de bebidas</title>

<style>
        body{
            padding: 0;
            top: 0;
            margin: 0;
            width: 100%;
        }
        /* td:hover{
            /* transform: rotate(360deg); 
        } */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            border: 2px solid #000000;
            text-align: left;
            transition: transform 1s ease;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-container {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .btn {
            padding: 5px 10px;
            margin: 2px;
            border: 1px solid #0000;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease, padding 0.3s ease;
        }
        .btn:hover{
            transform: translateY(-2px);
            box-shadow:  0 0 4px 0 #000000;
            border: 1px solid #ffffff;
            /* transform: rotate(90deg); */
            padding: 10px 15px;
        }
        .btn-editar {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .btn-excluir {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>

</head>
<body>
<h1>Gerenciamento de bebidas</h1>
<br>
<hr>
<div class="form-container">
    <?php if ($bebidaParaEditar): ?>
    <h2>Editar Bebidas</h2>
    <form method="POST">
        <input type="hidden" name="acao" value="atualizar">
    <input type="hidden" name="nomeOriginal" value="<?php echo htmlspecialchars($bebidaParaEditar->getNome()); ?>">
    <input type="text" name="nome"  placeholder="Nome:" value="<?php echo htmlspecialchars($bebidaParaEditar->getNome()); ?>" required>
        <input type="number" name="volume" placeholder="Volume:" value="<?php echo htmlspecialchars($bebidaParaEditar->getVolume()); ?>" required>
        <select name="categoria" required >
            <option value="<?php echo htmlspecialchars($bebidaParaEditar->getCategoria()); ?>">Selecione a categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" value="<?php echo htmlspecialchars($bebidaParaEditar->getValor()); ?>" required>
        <input type="number" name="qtde" placeholder="Quantidade em estoque:" value="<?php echo htmlspecialchars($bebidaParaEditar->getQtde()); ?>" required>
        <button type="submit" class="btn btn-editar">Atualizar</button>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-excluir">Cancelar</a>
    </form>
    <?php else: ?>
    <h2>Cadastrar Nova Bebida</h2>
    <form method="POST">
        <input type="hidden" name="acao" value="salvar">
        <input type="text" name="nome" placeholder="Nome da bebida:" required>
        <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
        <select name="categoria" required>
            <option value="">Selecione a categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
        <button type="submit" class="btn btn-editar">Cadastrar</button>
    </form>
    <?php endif; ?>
</div>

<div class="lista-container">
    <h2>Lista de Bebidas</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Volume (ml)</th>
                <th>Categoria</th>
                <th>Valor (R$)</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $bebida): ?>
            <tr>
                <td><?php echo htmlspecialchars($bebida->getNome()); ?></td>
                <td><?php echo htmlspecialchars($bebida->getVolume()); ?></td>
                <td><?php echo htmlspecialchars($bebida->getCategoria()); ?></td>
                <td><?php echo number_format($bebida->getValor(), 2, ',', '.'); ?></td>
                <td><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                <td>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                        <button type="submit" class="btn btn-editar">Editar</button>
                    </form>
                    <form method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta bebida?');">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                        <button type="submit" class="btn btn-excluir">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>