<html>
<head>
    <meta charset="utf-8" />
    <title>App Célula Liberty</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Montserrat:wght@600;700&family=Roboto:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="imgs/icone.png">
    
</head>

<body>
<nav class="navbar navbar-dark bg-success">
    <a class="navbar-brand" href="#">
        <img src="imgs/logo.png" class="icone-login mr-2">
        <h6>App da Célula</h6>
    </a>
</nav>

<div class="container">
    <div class="row">
        <div class="card-registro">
            <div class="card">
                <div class="card-header">
                    <h6>Registrar</h6>
                </div>

                <div class="card-body">

                    <!-- FORMULÁRIO CORRIGIDO -->
                    <form action="index.php?rota=cadastrar_usuario" method="post">

                        <div class="form-group">
                            <input name="nome" type="text" class="form-control" placeholder="Nome completo" required>
                        </div>

                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                        </div>

                        <div class="form-group">
                            <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required>
                        </div>

                        <div class="form-group">
                            <input id="confirmar_senha" type="password" class="form-control" placeholder="Confirmar Senha" required>
                        </div>

                        <p id="erro_senha" style="color:red;display:none;">As senhas não coincidem</p>

                        <button class="btn btn-lg btn-success btn-block" type="submit">Registrar</button>
                    </form>

                    <div class="justify-content-center menu-item">
                        <a class="btn btn-sm btn-info btn-block" href="index.php">Voltar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
