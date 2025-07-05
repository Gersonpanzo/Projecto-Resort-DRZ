<?php
session_start();

// Pega os dados da sessão
$nome     = $_SESSION['nome']     ?? 'Cliente';
$email    = $_SESSION['email']    ?? '';
$telefone = $_SESSION['telefone'] ?? '';
$bilhete  = $_SESSION['bilhete']  ?? '';
$sexo     = $_SESSION['sexo']     ?? '';

// Monta mensagem
$msg = "Olá, sou *$nome* e gostaria de fazer uma reserva no Resort DRZ.%0A";
$msg .= "📧 E-mail: $email%0A";
$msg .= "📱 Telefone: $telefone%0A";
$msg .= "🆔 BI: $bilhete%0A";
$msg .= "👤 Sexo: " . ($sexo === 'M' ? 'Masculino' : 'Feminino');

// Número do WhatsApp (com DDI e DDD)
$numero = '2449XXXXXXXX'; // Substitua pelo número real com DDI

// Redireciona para o WhatsApp com a mensagem
$link = "https://wa.me/$numero?text=" . urlencode($msg);
header("Location: $link");
exit;
?>
