<?php

namespace App\Core;

class Controller
{
    /**
     * Render a view file wrapped in a layout
     *
     * @param string $view e.g. 'pages/home'
     * @param array $data View data
     * @param string $layout e.g. 'layouts/main'
     */
    public function render(string $view, array $data = [], string $layout = 'layouts/main'): void
    {
        extract($data);

        $viewFile = __DIR__ . '/../Views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View file not found: {$viewFile}");
        }

        // Buffer view output
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // Render layout
        $layoutFile = __DIR__ . '/../Views/' . $layout . '.php';
        if (file_exists($layoutFile)) {
            require $layoutFile;
        } else {
            echo $content;
        }
    }
}
