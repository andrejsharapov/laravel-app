<?php
ini_set('display_errors', 1);

require_once __DIR__ . '/bootstrap.php';

$content = 'Create app for module 24.5';
?>

<div class="text-center">
  <?= $content; ?>

  <?php
  include 'views/main.php'
  ?>
</div>
