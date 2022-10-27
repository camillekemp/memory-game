<?php 
session_start();
?>
<header>
    <nav class="nav">
        <a class="nav-link" href="./index.php?p=forminscription">Inscription</a>
        <a class="nav-link" href="./index.php?p=formlogin">Connexion</a>
            <?php
                if (isset($_SESSION['loginConnecte'])){
                    // $_SESSION['loginConnecte'] 
                    echo "<a class='nav-link' href='../controler/logout.php'>Se deconnecter</a>";
                }
                else {
                    header ("location: ./formlogin.php");
                }
            ?>
    </nav>
</header>