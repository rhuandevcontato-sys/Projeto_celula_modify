<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Membro</title>

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

<?php if(isset($_GET['sucesso'])): ?>
                <div class="alert alert-success text-center">Registrado com sucesso!</div>
                <?php endif; ?>

<div class="container mt-5">
<div class="row justify-content-center">

<div class="card-home">
<div class="card" style="width: 36rem;">

<div class="card-header text-center">
    <h6>Registro de membros</h6>
</div>

<div class="card-body">

<div class="d-flex justify-content-center">

<form method="post" action="index.php?rota=registrar_chamado" style="width: 90%;">

    <div class="form-group text-center">
        <label class="w-100">Nome completo</label>
        <input name="nome_completo" type="text" class="form-control text-center">
    </div>

    <div class="form-group text-center">
        <label class="w-100">Célula</label>
        <select required name="celula" class="form-control text-center">
            <option value="">Célula participante</option>
            <option value="unity1">Unity Cristo I</option>
            <option value="unity2">Unity Cristo II</option>
            <option value="zion">Zion</option>
            <option value="herdeiros">Herdeiros</option>
        </select>
    </div>

    <div class="form-group text-center">
        <label class="w-100">É membro da igreja?</label>
        <select name="membro" class="form-control text-center">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <div class="form-group text-center">
        <label class="w-100">Descrição</label>
        <textarea name="descricao" class="form-control text-center" rows="3"></textarea>
    </div>

    <div class="row mt-4">
        <div class="col-6">
            <a class="btn btn-lg btn-success btn-block" href="index.php?rota=home">Voltar</a>
        </div>

        <div class="col-6">
            <button class="btn btn-lg btn-info btn-block" type="submit">Registrar</button>
        </div>
    </div>

</form>

</div>
</div>
</div>
</div>

</div>
</div>

</body>
</html>
