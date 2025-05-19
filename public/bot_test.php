<?php
// Guardamos información de la solicitud actual en un archivo de log
$logfile = __DIR__ . '/bot_log.txt';
file_put_contents($logfile, date('Y-m-d H:i:s') . " - Test iniciado\n", FILE_APPEND);
file_put_contents($logfile, "User-Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'no definido') . "\n\n", FILE_APPEND);

// Mostramos el User-Agent actual
echo "<h1>Test de detección de bots</h1>";
echo "<p>Tu User-Agent actual es: <strong>" . htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? 'No detectado') . "</strong></p>";

// Verificamos si es un bot según nuestra lógica
$bots = ['Googlebot', 'Bingbot', 'BadCrawler'];
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$isBot = false;

foreach ($bots as $botId) {
    if (stripos($ua, $botId) !== false) {
        $isBot = true;
        break;
    }
}

if ($isBot) {
    echo "<p style='color: red; font-weight: bold;'>¡DETECTADO COMO BOT!</p>";
    echo "<p>Si estuvieras accediendo normalmente, recibirías el archivo X.gz</p>";
} else {
    echo "<p style='color: green;'>No detectado como bot</p>";
}

echo "<h2>Instrucciones para probar</h2>";
echo "<p>Para probar si la función de detección de bots está funcionando:</p>";
echo "<ol>";
echo "<li>Instala una extensión para cambiar el User-Agent (como 'User-Agent Switcher for Chrome')</li>";
echo "<li>Configura tu User-Agent a 'Googlebot'</li>";
echo "<li>Visita la página principal de tu sitio (no esta página de prueba)</li>";
echo "<li>Si funciona correctamente, tu navegador intentará descargar un archivo en lugar de mostrar el sitio</li>";
echo "</ol>";