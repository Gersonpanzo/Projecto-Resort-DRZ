<!-- gallery.html – página Galeria do Resort DRZ -->
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resort DRZ — Galeria</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Estilo customizado do projeto -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header reutilizável -->
    <?php include 'includes/header.php'; ?>

    <div style="height: 90px"></div> <!-- espaçador para o header fixo -->

    <main class="container py-5">
      <h1 class="text-center mb-5 fw-bold">Nossa Galeria</h1>

      <!-- Grid responsivo -->
      <div class="row g-3" id="galleryGrid">
        <!-- Exemplo de item -->
        <?php
          /*
            Substitua o array abaixo por leitura dinâmica de banco ou pasta.
            Cada item = [src, alt]
          */
          $imagens = [
            ["assets/imgs/vista-piscina-horizontal.jpg", "Piscina Central"],
            ["assets/img/galeria/spa.jpg", "Spa e Bem-Estar"],
            ["assets/imgs/vista-restaurante-horizontal.jpg", "Restaurante e Bar"],
            ["assets/img/galeria/suite.jpg", "Suíte Master"],
            ["assets/imgs/salão.jpg", "Salão de Festas"],
            ["assets/img/galeria/jardim.jpg", "Jardim Externo"],
          ];
        ?>
        <?php foreach ($imagens as $idx => [$src, $alt]): ?>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="position-relative">
              <img src="<?= $src ?>" alt="<?= $alt ?>" class="img-fluid rounded shadow-sm gallery-thumb" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-index="<?= $idx ?>" />
              <span class="position-absolute bottom-0 start-0 bg-dark bg-opacity-50 text-white px-2 small rounded-bottom"><?= $alt ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </main>

    <!-- Modal de exibição -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
          <button type="button" class="btn-close btn-close-white ms-auto me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
            <img src="" alt="imagem ampliada" id="modalImg" class="img-fluid w-100 rounded" />
          </div>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap bundle + script da galeria -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      /* JS simples para trocar imagem no modal */
      const thumbs = document.querySelectorAll('.gallery-thumb');
      const modalImg = document.getElementById('modalImg');
      thumbs.forEach(thumb => {
        thumb.addEventListener('click', () => {
          modalImg.src = thumb.src;
          modalImg.alt = thumb.alt;
        });
      });
      
    </script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <!-- Popper 2 (já está certo) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap 5.3 (ou 5.2) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!-- Seu script -->
<script src="assets/js/script.js"></script>
  </body>
</html>
