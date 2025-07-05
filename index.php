<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DRZ</title>

  <!-- Ícone do site -->
  <link rel="icon" href="assets/imgs/favicon.ico">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Seu CSS personalizado -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-dark text-light">

  <?php include 'includes/header.php'; ?>

  <main>

    <!-- Corrigido: removido o "div invisível" que não serve para nada aqui -->
    
    <!-- === CAROUSEL === -->
    <section class="">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Corrigido: carousel-indicators com <button> (padrão do Bootstrap 5) -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <img class="d-block w-100 opacity-50" src="assets/imgs/vista-piscina-horizontal.jpg" alt="Vista da piscina">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1 class="Css_fonteCormorantGaramond">Mergulhe no Incomparável</h1>
                <p class="lead">Refresque-se com sofisticação em uma piscina que redefine o prazer de relaxar.</p>
                <p><a class="btn btn-lg btn-primary Css_fonteCormorantGaramond" href="tour.php"><i class="bi bi-eye me-2"></i>Visite-nos sem sair de casa</a></p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <img class="d-block w-100 opacity-50" src="assets/imgs/salão.jpg" alt="Salão de festas">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="Css_fonteCormorantGaramond">Celebre em Grande Estilo</h1>
                <p class="lead">Momentos memoráveis merecem cenários à altura. Seu evento, nosso requinte.</p>
                <p><a class="btn btn-lg btn-primary  Css_fonteCormorantGaramond" href="#"><i class="bi bi-calendar-check me-2"></i>Quero reservar agora</a></p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <img class="d-block w-100 opacity-75" src="assets/imgs/vista-restaurante-vertical.jpg" alt="Vista do restaurante">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1 class="Css_fonteCormorantGaramond">Alta Gastronomia, Atmosfera Exclusiva</h1>
                <p class="lead">Descubra a fusão entre alta gastronomia e elegância à beira de cada taça.</p>
                <p><a class="btn btn-lg btn-primary Css_fonteCormorantGaramond" href="galeria.php"><i class="bi bi-images me-2"></i>Veja com seus próprios olhos</a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Controles do carrossel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </section>

    <!-- === TESTEMUNHOS === -->
    <div class="container marketing my-5">
      <div class="row">
        <!-- Repetição de 3 blocos de testemunhos -->
        <!-- ... Mantenho o seu original ... -->
      </div>

      <hr class="featurette-divider">

      <!-- === RECEPÇÃO 24H === -->
      <div class="row featurette">
        <div class="col-md-6 ms-lg-5">
          <h2 class="featurette-heading">Estamos sempre prontos para receber você (24h).</h2>
          <p class="lead Css_textJ CSS_textSize_P">No Resort DRZ, a sua experiência começa no primeiro ‘olá’...</p>
        </div>
        <div class="col-md-5 text-center">
          <img class="featurette-image img-fluid" src="assets/imgs/recepcionista-meia.png" alt="Recepcionista sorridente">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- === WHATSAPP === -->
      <div class="row featurette mb-5">
        <div class="col-md-7 order-md-2 CSS_textSize_P">
          <h2 class="featurette-heading">Fale agora pelo WhatsApp</h2>
          <p class="lead Css_textJ">Clique abaixo e fale direto com a recepção...</p>
        </div>
        <div class="col-md-5 order-md-1 text-center">
          <a href="reservas.php" class="animabtn-cima-baixo d-block">
            <img class="img-fluid" src="assets/imgs/WhatsApp.svg.webp" alt="Ícone do WhatsApp" width="250">
          </a>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- === FORMULÁRIO DE FEEDBACK === -->
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sua opinião importa — e leva menos de um minutinho.</h2>
          <p class="lead">Diga-nos o que gostaria de ver no nosso resort 😊...</p>
        </div>
        <div class="col-md-5">
          <form method="post" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="inomeUsuario" class="form-label"><i class="bi bi-person me-1"></i> Nome</label>
              <input type="text" class="form-control" id="inomeUsuario" name="nome" required>
            </div>
            <div class="mb-3">
              <label for="iemailUsuario" class="form-label"><i class="bi bi-envelope-at me-1"></i> E-mail</label>
              <input type="email" class="form-control" id="iemailUsuario" name="email" required>
            </div>
            <div class="mb-3">
              <label for="icomentarioUsuario" class="form-label"><i class="bi bi-chat-text me-1"></i> Comentário</label>
              <textarea class="form-control" id="icomentarioUsuario" name="comentario" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success w-100">Enviar</button>
          </form>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
  </main>

  <!-- Bootstrap Bundle (JS + Popper juntos) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script personalizado -->
  <script src="assets/js/script.js"></script>

</body>
</html>
