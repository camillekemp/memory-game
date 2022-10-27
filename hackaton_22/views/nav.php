<?php 

?>
<header>
    <nav class="nav">
        
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