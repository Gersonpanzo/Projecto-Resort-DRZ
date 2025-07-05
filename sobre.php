<!-- sobre.html – Página "Sobre o Resort DRZ" -->
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resort DRZ — Sobre Nós</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Estilo customizado do projeto -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div style="height: 90px"></div>

    <main class="container py-5">
      <section class="text-center mb-5">
        <h1 class="fw-bold">Sobre o Resort DRZ</h1>
        <p class="lead mt-3">Conforto, exclusividade e experiências inesquecíveis em um só lugar.</p>
      </section>

      <section class="row align-items-center mb-5">
        <div class="col-lg-6">
          <img src="assets/imgs/vista-restaurante-horizontal.jpg" alt="Vista aérea do resort" class="img-fluid rounded shadow-sm" />
        </div>
        <div class="col-lg-6">
          <h3 class="mb-3">Nossa História</h3>
          <p>
            Fundado com a missão de proporcionar uma experiência incomparável de hospitalidade, o Resort DRZ surgiu como um refúgio de paz, conforto e luxo. Ao longo dos anos, consolidou-se como referência em bem-estar, natureza e sofisticação.
          </p>
          <p>
            Cada detalhe foi cuidadosamente planejado para encantar nossos hóspedes — desde a arquitetura até os serviços exclusivos oferecidos.
          </p>
        </div>
      </section>

      <section class="row align-items-center mb-5 flex-lg-row-reverse">
        <div class="col-lg-6">
          <img src="assets/imgs/vista-piscina-horizontal.jpg" alt="Área de lazer" class="img-fluid rounded shadow-sm" />
        </div>
        <div class="col-lg-6">
          <h3 class="mb-3">Estrutura de Alto Padrão</h3>
          <p>
            Contamos com suítes luxuosas, piscinas tropicais, spa, salão de festas, restaurante gourmet, bar panorâmico, além de espaços exclusivos para eventos e celebrações.
          </p>
          <p>
            Nossa equipe está pronta para tornar cada momento memorável, com atendimento 24h e serviços personalizados.
          </p>
        </div>
      </section>

      <section class="bg-light rounded p-4">
        <h3 class="text-center mb-4">Valores que nos Inspiram</h3>
        <div class="row text-center">
          <div class="col-md-4 mb-3">
            <i class="bi bi-stars fs-1 text-warning"></i>
            <h5 class="mt-2">Excelência</h5>
            <p>Buscamos oferecer sempre o melhor, em todos os detalhes.</p>
          </div>
          <div class="col-md-4 mb-3">
            <i class="bi bi-heart-pulse fs-1 text-danger"></i>
            <h5 class="mt-2">Cuidado</h5>
            <p>Serviços pensados para o seu bem-estar e conforto.</p>
          </div>
          <div class="col-md-4 mb-3">
            <i class="bi bi-globe fs-1 text-primary"></i>
            <h5 class="mt-2">Sustentabilidade</h5>
            <p>Valorizamos a natureza e a preservação do nosso entorno.</p>
          </div>
        </div>
      </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
