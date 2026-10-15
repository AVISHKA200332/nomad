<?php

// Define base paths
if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__));
if (!defined('APP_PATH')) define('APP_PATH', ROOT_PATH . '/app');
if (!defined('PUBLIC_PATH')) define('PUBLIC_PATH', ROOT_PATH . '/public');

// Autoloader for App namespace
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = APP_PATH . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Helper for asset URLs (works seamlessly under XAMPP subdirectory or standalone server)
if (!function_exists('asset')) {
    function asset(string $path): string {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $base = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');
        return $base . '/' . ltrim($path, '/');
    }
}

// Helper for route URLs
if (!function_exists('url')) {
    function url(string $path = ''): string {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $base = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');
        $trimmedPath = ltrim($path, '/');
        return $base . ($trimmedPath === '' ? '/' : '/' . $trimmedPath);
    }
}

// Instantiate router
$router = new \App\Core\Router();

// Load routes
require ROOT_PATH . '/routes/web.php';

return $router;
