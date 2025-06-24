
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>DRZ</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- Bootstrap core para js -->

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php
  include 'includes/header.php';
  ?>

  <main role="main">

    <section class="container-lg">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide opacity-50"
              src="assets/imgs/vista-piscina-horizontal.jpg" alt="First slide">
            <div class="container ">
              <div class="carousel-caption text-left">
                <h1 class="Css_fonteCormorantGaramond  ">Mergulhe no Incomparável </h1>
                <p class="lead ">Refresque-se com sofisticação em uma piscina que redefine o prazer de relaxar.</p>
                <p><a class="btn btn-lg btn-primary Css_fonteCormorantGaramond " href="#" role="button"><i class="bi bi-eye me-2"></i> Visite-nos sem sair de casa</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide  opacity-50"
              src="assets/imgs/salão.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="Css_fonteCormorantGaramond">Celebre em Grande Estilo</h1>
                <p class="lead">Momentos memoráveis merecem cenários à altura. Seu evento, nosso requinte.

                </p>
                <p><a class="btn btn-lg btn-primary Css_fonteCormorantGaramond " href="#" role="button"><span class="bi bi-calendar-check me-2"></span>Quero reservar agora</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide  opacity-75"
              src="assets/imgs/vista-restaurante-vertical.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1 class="Css_fonteCormorantGaramond">Alta Gastronomia, Atmosfera Exclusiva</h1>
                <p class="lead">Descubra a fusão entre alta gastronomia e elegância à beira de cada taça.</p>
                <p><a class="btn btn-lg btn-primary Css_fonteCormorantGaramond m" href="#" role="button"><span class="bi bi-images me-2"> </span>Veja com seus próprios olhos</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </a>
      </div>
    </section>

     <div class="container marketing">

      <!-- Três colunas de texto abaixo do carrossel -->
      <div class="row">

        <div class="col-lg-4 ">
          <img class="rounded-circle  border border-1 "
            src="assets/imgs/maria-profile-img.avif"
            alt="Imagem de perfil de cliente" width="140" height="140">
          <h2>Mariana Costa</h2>
          <p>"Casei no salão de festas do DRZ e foi simplesmente mágico! Cada detalhe parecia ter saído de um sonho. A equipe foi impecável e meus convidados ficaram encantados com o espaço. Um dia perfeito, num lugar inesquecível."

          </p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle border border-1"
            src="assets/imgs/joao-img-profile.jpg"
            alt="Generic placeholder image" width="140" height="140">
          <h2>João Paulo Delgado</h2>
          <p>"Fui com meus amigos passar um feriado e a experiência superou todas as expectativas. A estrutura, o atendimento e o clima do resort são incríveis. Curtimos o bar, demos boas risadas e já estamos planejando voltar.".</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle border border-1 "
            src="assets/imgs/andré-profile-img.jpg"
            alt="Imagem de perfil de cliente" width="140" height="140">
          <h2>André M. Ferreira</h2>
          <p>"Levei minha esposa para um fim de semana no DRZ e foi uma das melhores decisões que já tomei. A vista da piscina ao pôr do sol, o jantar romântico no restaurante… tudo impecável. Voltamos com memórias que vão durar pra sempre."</p>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6 ms-lg-5 ">
        <h2 class="featurette-heading">Estamos sempre prontos para receber você (24h).
        </h2>
        <p class="lead Css_textJ CSS_textSize_P ">No Resort DRZ, a sua experiência começa no primeiro ‘olá’.
          Nossa recepção está disponível 24 horas por dia, todos os dias, pronta para atender com cordialidade, eficiência e aquele toque especial de hospitalidade que faz toda a diferença.</p>
      </div>
      <div class="col-md-5 d-flex justify-content-center">
        <picture>
          <source media="(min-width:320px)" srcset="assets/imgs/recepcionista-meia.png">
          <source media="(min-width:720px) and (max-width:1200px)" srcset="assets/imgs/recepcionista-completa.pngassets/imgs/recepcionista-completa.png">

          <img class="featurette-image img-fluid mx-auto" src="assets/imgs/recepcionista-completa.png"
            alt="imagem da recepcionista">
        </picture>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette mb-5">
      <div class="col-md-7 order-md-2 CSS_textSize_P ">
        <h2 class="featurette-heading">Fale agora pelo WhatsApp</h2>
        <p class="lead Css_textJ">Atendimento exclusivo e imediato, 24 horas por dia.
          Nossa equipe está pronta para ajudar você a viver a experiência única do Resort DRZ.
          Clique abaixo e fale direto com a recepção pelo WhatsApp — simples, rápido e personalizado.</p>
      </div>
      <div class="col-md-5 order-md-1 d-flex justify-content-center align-items-center">
        <a href="#" class="animabtn-cima-baixo d-block">
          <img class="featurette-image img-fluid mx-auto animabtn-cima-baixo" src="assets/imgs/WhatsApp.svg.webp"
            alt="Generic placeholder image" width="250px">
        </a>
      </div>
    </div>

   

    <!-- Mensagens de marketing e recursosMarketing messaging and featurettes
      ================================================== -->


   



      <div class="row featurette align-items-center">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sua opinião importa — e leva menos de um minutinho. </h2>
          <p class="lead">Diga-nos o que gostaria de ver no nosso resort 😊.precisamos deixar tudo mais elegante e confortavel para você!</p>
        </div>
        <!-- /formulário para avaliação -->
        <section class="col-md-5 mt-xl-5">
          <form action="" method="post" class=" d-flex flex-column justify-content-center align-items-center" no-validate>
            <div class=" w-100 row align-items-center justify-content-center">
              <label for="inomeUsuario" class="form-label col-2">
                <i class="bi bi-person fs-1"></i> <!-- Ícone de pessoa -->
               
              </label>
              <input type="text" placeholder="Digite o seu nome por favor" required class="form-control w-75" id="inomeUsuario">
            </div>
            <div class="m-3 w-100 row align-items-center justify-content-center">
              <label for="iemailUsuario" class="form-label col-2">
                <i class="bi bi-envelope-at fs-1"></i> <!-- Ícone de e-mail com @ -->

              </label>
              <input type="email" placeholder="Digite o seu e-mail por favor" required class="form-control w-75" id="iemailUsuario">
            </div>
            <div class=" w-100 row align-items-center justify-content-center ">
              <label for="icomentarioUsuario" class="form-label col-2">
                <i class="bi bi-chat-text fs-1"></i>

              </label>
              <textarea name="" id="icomentarioUsuario" class="text-start  w-75">
              </textarea>
            </div>
            <div class="text-center w-100 mt-4">
              <input type="submit" class="btn btn-outline-success w-50">
            </div>
          </form>
        </section>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>