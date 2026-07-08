<?php
// ─────────────────────────────────────────────
// contacto.php · recibe el formulario de la landing y manda el lead por correo.
// Responde JSON si viene por fetch; si no, redirige a /?enviado=1#contacto.
// ─────────────────────────────────────────────

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

// Honeypot anti-spam: si viene lleno, fingimos éxito y descartamos.
if (!empty($_POST['empresa_web'])) salir(true);

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
