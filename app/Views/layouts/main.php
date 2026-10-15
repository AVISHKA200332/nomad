<?php
// Layout wrapper for all public pages
require_once __DIR__ . '/../partials/head.php';
require_once __DIR__ . '/../partials/navbar.php';
?>

<main id="main-content">
  <?= $content ?>
</main>

<?php
require_once __DIR__ . '/../partials/footer.php';
require_once __DIR__ . '/../partials/scripts.php';
?>
