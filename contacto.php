<?php
// ─────────────────────────────────────────────
// contacto.php · recibe el formulario de la landing y manda el lead por correo.
// Responde JSON si viene por fetch; si no, redirige a /?enviado=1#contacto.
// ─────────────────────────────────────────────

header('X-Robots-Tag: noindex, nofollow'); // endpoint de formulario: no indexar
require __DIR__ . '/form-lib.php';

// A dónde llegan los prospectos (cámbialo si quieres otro correo):
$DESTINO   = 'andres.guru@gmail.com';
$MAIL_FROM = 'FacturaQR <noreply@facturaqr.app>';

$esFetch = (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch');
function salir($ok, $codigo = 200, $error = '') {
  global $esFetch;
  if ($esFetch) {
    http_response_code($codigo);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($ok ? ['ok' => true] : ['ok' => false, 'error' => $error]);
  } else {
    header('Location: ' . ($ok ? '/?enviado=1#contacto' : '/?error=1#contacto'));
  }
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') salir(false, 405, 'Método no permitido');

// ── Capas anti-spam (a los bots se les finge éxito para no darles pistas) ──
// 1) Honeypot: si el campo oculto viene lleno, es un bot.
if (!empty($_POST['empresa_web'])) salir(true);
// 2) Token de tiempo firmado: sin firma válida o llenado en <4 s = bot.
$tk = fq_form_token_estado($_POST['t'] ?? '', $_POST['ts'] ?? '');
if ($tk === 'bot') salir(true);
if ($tk === 'viejo') salir(false, 400, 'La página llevaba mucho tiempo abierta. Recárgala e intenta de nuevo.');
// 3) Verificación de JS: el navegador real marca este campo al cargar.
if (($_POST['fjs'] ?? '') !== '1') salir(true);

$nombre   = trim($_POST['nombre']   ?? '');
$negocio  = trim($_POST['negocio']  ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$correo   = trim($_POST['correo']   ?? '');
$plan     = trim($_POST['plan']     ?? 'No especificado');
$mensaje  = trim($_POST['mensaje']  ?? '');

if ($nombre === '' || $negocio === '' || $telefono === '')
  salir(false, 400, 'Faltan datos obligatorios.');
if (!filter_var($correo, FILTER_VALIDATE_EMAIL))
  salir(false, 400, 'El correo no es válido.');
if (!preg_match('/^\d{10}$/', preg_replace('/\D/', '', $telefono)))
  salir(false, 400, 'El teléfono deben ser 10 dígitos.');
// 4) Contenido spam (enlaces en nombre/negocio, etiquetas de foro, 2+ URLs).
if (fq_parece_spam($nombre, $negocio, $mensaje)) salir(true);
// 5) Límite por IP: 3 por hora / 10 por día.
if (!fq_rate_ok($_SERVER['REMOTE_ADDR'] ?? '?')) salir(true);

$limpio = fn($s) => str_replace(["\r", "\n"], ' ', $s); // evita inyección de cabeceras

$asunto = 'Nuevo prospecto FacturaQR — ' . $limpio($negocio);
$cuerpo =
  "Nuevo prospecto desde facturaqr.app:\n\n" .
  "Nombre:   $nombre\n" .
  "Negocio:  $negocio\n" .
  "Teléfono: $telefono\n" .
  "Correo:   $correo\n" .
  "Plan:     $plan\n" .
  "Mensaje:  " . ($mensaje !== '' ? $mensaje : '(sin mensaje)') . "\n\n" .
  "IP: " . ($_SERVER['REMOTE_ADDR'] ?? '?') . " · " . date('Y-m-d H:i');

$headers  = 'From: ' . $MAIL_FROM . "\r\n";
$headers .= 'Reply-To: ' . $limpio($nombre) . ' <' . $limpio($correo) . ">\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$enviado = @mail($DESTINO, $asunto, $cuerpo, $headers);
if ($enviado) salir(true);
salir(false, 502, 'No se pudo enviar. Intenta por WhatsApp.');
