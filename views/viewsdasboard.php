// views/dashboard.php
<?php if (isset($_SESSION['username'])) : ?>
  <h1>Bem-vindo, <?php echo $_SESSION['username']; ?></h1>
  <?php if ($_SESSION['role'] == 'master') : ?>