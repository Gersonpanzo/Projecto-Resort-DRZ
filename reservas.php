<?php
session_start();

/* ---------- PASSO 1: recebeu dados pessoais? ---------- */
if (isset($_POST['etapa']) && $_POST['etapa'] === 'dadosPessoais') {
  $_SESSION['nome']     = htmlspecialchars(trim($_POST['nome']     ?? ''));
  $_SESSION['email']    = htmlspecialchars(trim($_POST['email']    ?? ''));
  $_SESSION['telefone'] = htmlspecialchars(trim($_POST['telefone'] ?? ''));
  $_SESSION['bilhete']  = htmlspecialchars(trim($_POST['bilhete']  ?? ''));
  $_SESSION['sexo']     = htmlspecialchars(trim($_POST['sexo']     ?? ''));
  $_SESSION['etapa']    = 'reserva';  // avança para próxima etapa
  header("Location: " . $_SERVER['PHP_SELF']); // evita reenvio do formulário
  exit;
}

/* ---------- PASSO 2: recebeu dados da reserva? ---------- */
if (isset($_POST['etapa']) && $_POST['etapa'] === 'reserva') {
  $_SESSION['checkin']  = htmlspecialchars(trim($_POST['checkin']  ?? ''));
  $_SESSION['checkout'] = htmlspecialchars(trim($_POST['checkout'] ?? ''));
  $_SESSION['quarto']   = htmlspecialchars(trim($_POST['quarto']   ?? ''));
  $_SESSION['pessoas']  = htmlspecialchars(trim($_POST['pessoas']  ?? ''));

  // monta mensagem e redireciona
  $numero = '244958515647';
  $msg  = "Reserva solicitada por *{$_SESSION['nome']}*%0A";
  $msg .= " {$_SESSION['email']} | 📱 {$_SESSION['telefone']}%0A";
  $msg .= " BI: {$_SESSION['bilhete']} | Sexo: " .
          ($_SESSION['sexo'] === 'M' ? 'Masculino' : 'Feminino') . "%0A";
  $msg .= " Quarto: {$_SESSION['quarto']}%0A";
  $msg .= " Check‑in: {$_SESSION['checkin']} | Check‑out: {$_SESSION['checkout']}%0A";
  $msg .= " Pessoas: {$_SESSION['pessoas']}";

  // limpa sessão e redireciona para WhatsApp
  session_unset();
  session_destroy();
  header("Location: https://wa.me/$numero?text=" . urlencode($msg));
  exit;
}

/* ---------- Qual formulário mostrar? ---------- */
$mostrarReserva = ($_SESSION['etapa'] ?? '') === 'reserva';
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DRZ – Reserva</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include 'includes/header.php'; ?>
<div style="height:90px;"></div>

<main class="container my-5">

<?php if (!$mostrarReserva): ?>
  <!-- ========== FORMULÁRIO A – DADOS PESSOAIS ========== -->
  <h2 class="mb-4">Dados Pessoais</h2>
  <form class="needs-validation" method="post" novalidate>
    <input type="hidden" name="etapa" value="dadosPessoais">

    <!-- Nome -->
    <div class="mb-3 row align-items-center">
      <label for="inomeUsuario" class="col-2 col-form-label text-center">
        <i class="bi bi-person fs-2"></i>
      </label>
      <div class="col-10">
        <input type="text" id="inomeUsuario" name="nome" class="form-control" placeholder="Digite seu nome" required>
        <div class="invalid-feedback">Informe o nome.</div>
      </div>
    </div>

    <!-- E‑mail -->
    <div class="mb-3 row align-items-center">
      <label for="iemailUsuario" class="col-2 col-form-label text-center">
        <i class="bi bi-envelope-at fs-2"></i>
      </label>
      <div class="col-10">
        <input type="email" id="iemailUsuario" name="email" class="form-control" placeholder="Digite seu e‑mail" required>
        <div class="invalid-feedback">E‑mail inválido.</div>
      </div>
    </div>

    <!-- Telefone -->
    <div class="mb-3 row align-items-center">
      <label for="itelefoneUsuario" class="col-2 col-form-label text-center">
        <i class="bi bi-telephone fs-2"></i>
      </label>
      <div class="col-10">
        <input type="tel" id="itelefoneUsuario" name="telefone" class="form-control" placeholder="Digite seu telefone" required>
        <div class="invalid-feedback">Informe o telefone.</div>
      </div>
    </div>

    <!-- Bilhete -->
    <div class="mb-3 row align-items-center">
      <label for="ibilheteUsuario" class="col-2 col-form-label text-center">
        <i class="bi bi-card-text fs-2"></i>
      </label>
      <div class="col-10">
        <input type="text" id="ibilheteUsuario" name="bilhete" class="form-control" placeholder="Nº do bilhete de identidade" required>
        <div class="invalid-feedback">Informe o nº do bilhete.</div>
      </div>
    </div>

    <!-- Sexo -->
    <div class="mb-4 d-flex align-items-center gap-3">
      <span>Sexo:</span>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="isexoM" name="sexo" value="M" checked>
        <label class="form-check-label" for="isexoM">Masculino</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="isexoF" name="sexo" value="F">
        <label class="form-check-label" for="isexoF">Feminino</label>
      </div>
    </div>

    <button class="btn btn-success w-100">Próximo</button>
  </form>

<?php else: ?>
  <!-- ========== FORMULÁRIO B – DADOS DA RESERVA ========== -->
  <h2 class="mb-4">Detalhes da Reserva</h2>
  <form class="needs-validation" method="post" novalidate>
    <input type="hidden" name="etapa" value="reserva">

    <div class="mb-3">
      <label class="form-label">Data de Check‑in</label>
      <input type="date" name="checkin" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Data de Check‑out</label>
      <input type="date" name="checkout" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo de Quarto</label>
      <select name="quarto" class="form-select" required>
        <option value="">Escolha…</option>
        <option>Luxo Casal</option>
        <option>Executivo</option>
        <option>Suíte Master</option>
      </select>
    </div>

    <div class="mb-4">
      <label class="form-label">Quantidade de Pessoas</label>
      <input type="number" name="pessoas" class="form-control" min="1" max="6" required>
    </div>

    <button class="btn btn-success w-100">Enviar para WhatsApp</button>
  </form>
<?php endif; ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Validação Bootstrap
(() => {
  'use strict';
  document.querySelectorAll('.needs-validation').forEach(form => {
    form.addEventListener('submit', e => {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
</body>
</html>

