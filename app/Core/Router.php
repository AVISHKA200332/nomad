<?php

namespace App\Core;

class Router
{
    protected array $routes = [
        'GET'  => [],
        'POST' => []
    ];

    public function get(string $path, $handler): self
    {
        $this->routes['GET'][$this->normalizePath($path)] = $handler;
        return $this;
    }

    public function post(string $path, $handler): self
    {
        $this->routes['POST'][$this->normalizePath($path)] = $handler;
        return $this;
    }

    protected function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        return $path === '' ? '/' : '/' . $path;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // Strip base path if running in subdirectory (e.g. /avenora/public)
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        if ($scriptDir !== '/' && $scriptDir !== '.' && strpos($uri, $scriptDir) === 0) {
            $uri = substr($uri, strlen($scriptDir));
        }

        $uri = $this->normalizePath($uri);

        $handler = $this->routes[$method][$uri] ?? null;

        if (!$handler) {
            http_response_code(404);
            echo "<!DOCTYPE html><html><head><title>404 Not Found</title><style>body{font-family:sans-serif;background:#031126;color:#fff;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}a{color:#3047f4;}</style></head><body><div style='text-align:center;'><h1>404 - Page Not Found</h1><p>Route {$uri} does not exist.</p><p><a href='" . url('/') . "'>Return to Home</a></p></div></body></html>";
            return;
        }

        if (is_callable($handler)) {
            call_user_func($handler);
            return;
        }

        if (is_string($handler) && strpos($handler, '@') !== false) {
            [$controllerName, $action] = explode('@', $handler);
            $fullClass = "\\App\\Controllers\\{$controllerName}";
            if (!class_exists($fullClass)) {
                $fullClass = $controllerName;
            }
            if (class_exists($fullClass)) {
                $controller = new $fullClass();
                if (method_exists($controller, $action)) {
                    $controller->$action();
                    return;
                }
            }
        }

        if (is_array($handler)) {
            [$controllerClass, $action] = $handler;
            $controller = new $controllerClass();
            $controller->$action();
            return;
        }

        http_response_code(500);
        echo "<h1>500 - Invalid Route Handler</h1>";
    }
}
