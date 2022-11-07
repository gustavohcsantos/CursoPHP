<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="recursos/css/estilo.css" rel="stylesheet">
    <link href="recursos/css/exercicio.css" rel="stylesheet">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
    <a href=<?= "./teste/teste.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                include("./teste/teste.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        DAORA WEB & APP <?= date('Y'); ?>
    </footer>
</body>