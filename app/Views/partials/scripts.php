  <!-- Application Scripts -->
  <script src="<?= asset('assets/js/navigation.js') ?>?v=4.6"></script>
  <script src="<?= asset('assets/js/main.js') ?>?v=5.1"></script>
  <?php if (($activePage ?? 'home') !== 'home'): ?>
    <script src="<?= asset('assets/js/modules/plan-stay.js') ?>?v=4.0"></script>
    <script src="<?= asset('assets/js/modules/home-animations.js') ?>?v=4.0"></script>
  <?php endif; ?>
</body>
</html>