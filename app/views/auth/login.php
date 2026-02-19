<!DOCTYPE html>
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

<nav class="navbar navbar-dark bg-success d-flex justify-content-between">
    <a class="navbar-brand d-flex align-items-center" href="index.php?rota=login">
        <img src="imgs/logo.png" class="icone-login mr-2">
        <h6 class="mb-0">App da Célula</h6>
    </a>
</nav>  

<div class="container">    
  <div class="row">

    <div class="card-login">
      <div class="card">
        <div class="card-header">
          <h6>Login</h6>
        </div>
        <div class="card-body">

          <!-- MVC: action aponta para rota -->
          <form method="POST" action="index.php?rota=login"> 

            <div class="form-group">
              <input name="email" type="email" class="form-control" placeholder="email" required>
            </div>

            <div class="form-group">
              <input name="senha" type="password" class="form-control" placeholder="Senha" required>
            </div>

            <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
          </form>

          <div class="justify-content-center menu-item mt-2">
            <a class="btn btn-sm btn-info btn-block" href="index.php?rota=cadastrar_usuario">
              Registrar-se
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<!-- CARDS FLUTUANTES -->
<div class="floating-card" id="promoCard1">
  <button class="close-btn" onclick="document.getElementById('promoCard1').style.display='none'">×</button>

  <img src="imgs/vigilia.jpg" class="card-img" alt="Evento">

  <div class="card-content">
    <h4>Vigília da Jornada de Oração!</h4>
    <h6>Uma noite pra buscar a Deus, alinhar o coração e viver algo novo 🔥🙏</h6>
    <p>07/02 | 22h
      Igreja da Liberdade
      Evento gratuito
      Você é nosso convidado especial! ✨</p>
    <a href="https://www.instagram.com/p/DT3oImdkeOW/" class="btn btn-success btn-large">
      Ver detalhes
    </a>
  </div>
</div>

<div class="floating-card" id="promoCard2">
  <button class="close-btn" onclick="document.getElementById('promoCard2').style.display='none'">×</button>

  <img src="imgs/Jornada.jpg" class="card-img" alt="Evento">

  <div class="card-content">
    <h4>Jornada de Oração</h4>
    <h6>Dias de clamor, fé e transformação.
    A Jornada de Oração é um convite para quem deseja se aproximar ainda mais de Deus.</h6>
    <p>📅 27 de janeiro a 07 de fevereiro
    📍 Igreja da Liberdade
    </p>
    <a href="https://www.instagram.com/p/DTk2hZGEXIp/" class="btn btn-success btn-large">
      Ver detalhes
    </a>
  </div>
</div>

</body>
</html>
