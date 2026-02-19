<?php
    if(!isset($_SESSION['usuario_id'])) {
        header('Location: index.php?rota=login');
        exit;
    }
?>


<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta das Células</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="icon" type="image/png" href="imgs/icone.png">
    

</head>

<body>

<nav class="navbar navbar-dark bg-success d-flex justify-content-between">
    <a class="navbar-brand d-flex align-items-center" href="index.php?rota=home">
        <img src="imgs/logo.png" class="icone-login mr-2">
        <h6 class="mb-0">App da Célula</h6>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="index.php?rota=logoff">SAIR</a>
        </li>
    </ul>
</nav>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card-consulta">
            <div class="card p-4" style="width: 36rem; height: auto;">

                <h3 class="mb-4">Resumo das Células</h3>

                <div class="card p-4 mb-4" style="
                    background: rgba(255, 255, 255, 0.25);
                    backdrop-filter: blur(4px);
                    border-radius: 12px;
                    border-left: 5px solid #28a745;                  
                    width: 100%;
                    margin: 10 auto;
                ">

                    <?php foreach($dados['celulaCount'] as $celula => $qtd): ?>
                    
                        <p class="mb-2">Célula <strong><?= htmlspecialchars($celula) ?></strong>: <?= $qtd ?> registro(s)</p> 
                        <hr>
                    <?php endforeach; ?>

                </div>
                
                <hr>

                <h3 class="mb-4">Membros da Igreja</h3>

                <div class="card p-3 mb-4" style="
                        background: rgba(255, 255, 255, 0.25);
                        backdrop-filter: blur(4px);
                        border-radius: 12px;
                        border-left: 5px solid #28a745;
                        width: 100%;
                        margin: 10 auto;
                    ">

                    <p><strong>Sim:</strong> <?= $dados['membrosSummary']['sim'] ?></p>
                        <hr>
                    <p><strong>Não:</strong> <?= $dados['membrosSummary']['nao'] ?></p>
                    
                </div>

                    <hr>

                    <div class="text-center mb-3">
                        <a href="index.php?rota=consultar_chamado&filtro=completo" class="btn <?= $dados['filtro'] == 'completo' ? 'btn-dark' : 'btn-light' ?>">Lista Completa</a>
                        <a href="index.php?rota=consultar_chamado&filtro=sim" class="btn <?= $dados['filtro'] == 'sim' ? 'btn-success' : 'btn-outline-success' ?>">Somente Membros</a>
                        <a href="index.php?rota=consultar_chamado&filtro=nao" class="btn <?= $dados['filtro'] == 'nao' ? 'btn-danger' : 'btn-outline-danger' ?>">Não Membros</a>
                    </div>

                    <hr>

                <h3 class="mb-3 text-center">Lista</h3>

                <?php foreach ($dados['registrosFiltrados'] as $r): ?>
                    <div class="card mb-3 p-3 border-left border-success">

                        <div class="d-flex justify-content-between">
                            <h5><?= htmlspecialchars($r['nome_completo']) ?></h5>
                            <small><?= htmlspecialchars($r['celula']) ?></small>
                        </div>

                        <p>
                            <strong>Membro:</strong>
                            <?= $r['membro'] == 1
                                ? "<span class='text-success'>Sim</span>"
                                : "<span class='text-danger'>Não</span>" ?>
                        </p>

                        <?php if (!empty($r['descricao'])): ?>
                            <small><strong>Descrição:</strong> <?= htmlspecialchars($r['descricao']) ?></small>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>


                <a class="btn btn-success mt-3" href="index.php?rota=home">Voltar</a>

            </div>
        </div>
    </div>
</div>

</body>
</html>
