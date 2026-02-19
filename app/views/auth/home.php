<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home da Célula</title>

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

        <div class="card-home">
            <div class="card" style="width: 40rem; height: 360px;">
                <div class="card-header">
                    <h6 class="row justify-content-center">Menu</h6>
                </div>

                <div class="card-body">
                    <div class="row">
                       <div class="col-6 d-flex justify-content-center menu-item">
                <span class="menu-label">Células</span>
                    <a href="index.php?rota=abrir_chamado">
                <img src="imgs/células.png" width="70" height="70">
                </a>
            </div>

            <div class="col-6 d-flex justify-content-center menu-item">
                <span class="menu-label">Membros</span>
                    <a href="index.php?rota=consultar_chamado">
                <img src="imgs/membros.png" width="70" height="70">
             </a>
            </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>


