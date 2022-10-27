<?php 

?>
<header>
    <nav class="nav">
        
            <?php
                if (isset($_SESSION['nom'])){
                    // $_SESSION['loginConnecte'] 
                    echo "<a class='nav-link' href='/Hackathon/controler/logout.php'>Se deconnecter</a>";
                }
                else {
                    header ("location: /Hackathon/views/formlogin.php");
                }
            ?>
    </nav>
</header>