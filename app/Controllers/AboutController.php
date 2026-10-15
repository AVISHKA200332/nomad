<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        echo "<!DOCTYPE html><html><head><title>AboutController - Avenora</title><style>body{font-family:sans-serif;background:#031126;color:#fff;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}a{color:#3047f4;}</style></head><body><div style='text-align:center;'><h1>Avenora - AboutController</h1><p>This page will be implemented in future phases.</p><p><a href='" . url('/') . "'>Return to Home</a></p></div></body></html>";
    }
}