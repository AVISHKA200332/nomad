<?php

namespace App\Controllers;

use App\Core\Controller;

class PackageController extends Controller
{
    public function index(): void
    {
        // Maintain clean backwards compatibility with package route
        $stayController = new StayController();
        $stayController->index();
    }
}
