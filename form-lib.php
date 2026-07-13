<?php
// ─────────────────────────────────────────────
// form-lib.php · Defensas anti-spam del formulario de la landing.
// Capas: token de tiempo firmado (HMAC), verificación de JS, límite por IP
// y filtros de contenido. Sin captcha visible: cero fricción para humanos.
// El secreto y el contador viven en _priv/ (bloqueado con .htaccess).
// ─────────────────────────────────────────────

function fq_priv_dir() {
  $d = __DIR__ . '/_priv';
  if (!is_dir($d)) {
    @mkdir($d, 0750, true);
    @file_put_contents($d . '/.htaccess', "Require all denied\n");
    @file_put_contents($d . '/index.html', '');
  }
  return $d;
}

function fq_form_secret() {
  $f = fq_priv_dir() . '/secret.txt';
  $s = @file_get_contents($f);
  if (!$s) { $s = bin2hex(random_bytes(32)); @file_put_contents($f, $s, LOCK_EX); @chmod($f, 0600); }
  return $s;
}

// [timestamp, firma] para los campos ocultos del formulario
function fq_form_token() {
  $t = time();
  return [$t, hash_hmac('sha256', 'lead.' . $t, fq_form_secret())];
}

// 'ok' | 'bot' (firma mala o envío en <4 s) | 'viejo' (página abierta >24 h)
function fq_form_token_estado($t, $firma) {
  if (!ctype_digit((string)$t)) return 'bot';
  if (!hash_equals(hash_hmac('sha256', 'lead.' . (int)$t, fq_form_secret()), (string)$firma)) return 'bot';
  $edad = time() - (int)$t;
  if ($edad < 4) return 'bot';          // ningún humano llena 6 campos en 4 segundos
  if ($edad > 86400) return 'viejo';    // pestaña olvidada: pedir recargar
  return 'ok';
}

// Límite por IP: 3 envíos por hora, 10 por día. Si el candado falla
// (p. ej. sin permisos de escritura), NUNCA bloquea un lead real.
function fq_rate_ok($ip) {
  try {
    $db = new PDO('sqlite:' . fq_priv_dir() . '/leads.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('CREATE TABLE IF NOT EXISTS envios (ip TEXT, creado INTEGER)');
    $db->prepare('DELETE FROM envios WHERE creado < ?')->execute([time() - 86400]);
    $q = $db->prepare('SELECT COALESCE(SUM(creado > ?),0) hora, COUNT(*) dia FROM envios WHERE ip = ?');
    $q->execute([time() - 3600, $ip]);
    $r = $q->fetch(PDO::FETCH_ASSOC);
    if ((int)$r['hora'] >= 3 || (int)$r['dia'] >= 10) return false;
    $db->prepare('INSERT INTO envios (ip, creado) VALUES (?, ?)')->execute([$ip, time()]);
    return true;
  } catch (Throwable $e) {
    return true;
  }
}

// Heurística de spam en el contenido: enlaces donde no van, o etiquetas de foro.
function fq_parece_spam($nombre, $negocio, $mensaje) {
  $enCampoCorto = fn($s) => preg_match('~https?://|www\.~i', $s);
  if ($enCampoCorto($nombre) || $enCampoCorto($negocio)) return true;
  if (preg_match('~\[url|\[link|<a\s~i', $mensaje)) return true;
  if (preg_match_all('~https?://~i', $mensaje) >= 2) return true;
  return false;
}
