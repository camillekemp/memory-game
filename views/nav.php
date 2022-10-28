<header>
    <nav class="nav">
<?php if( isset($_SESSION['nom']) !== null ) : ?>
    <a href="/hackathon/index.php?p=logout">Se déconnecter</a>
  <?php else : ?>
    <a href="/hackathon/views/formlogin.php">Se connecter</a>
  <?php endif; ?>
    </nav>
</header>