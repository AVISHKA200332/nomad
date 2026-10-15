  <!-- Application Scripts -->
  <script src="<?= asset('assets/js/navigation.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>
  <?php if (($activePage ?? 'home') === 'destinations'): ?>
    <script src="<?= asset('assets/js/modules/destinations.js') ?>"></script>
  <?php endif; ?>
</body>
</html>
