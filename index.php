<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/connexion.css">
</head>
<body>



  
    <?php
        if (isset($_POST['p'])) {
            include "./" . $_POST['p'] . ".php";
        } else {
            include "./views/formlogin.php";
        }
        ?>
   
<!-- include("./views/formlogin.php") -->
    <!-- <button onclick="location.href='./views/forminscription.php'">Inscription</button> -->
    <!-- <button onclick="location.href='./views/formlogin.php'">Connexion</button> -->
    <!-- <button href="./html/connexion.php">Connexion</button> -->
</body>
</html>