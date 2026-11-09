<?php

/**
 * The Lankan Nomad - Vercel Serverless Entrypoint
 * © Orbis Global - 2026
 */

// Normalize SCRIPT_NAME so helpers (asset, url) generate clean root-relative paths on Vercel
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Dispatch via front controller
require __DIR__ . '/../public/index.php';
