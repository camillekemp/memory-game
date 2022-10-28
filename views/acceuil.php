<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
</head>

<body>
  <div id="container">

    <header>
      <div class="head">

        <!-- logo -->

        <div id="logo">
          <a><img src="../assets/img/test4.gif"></a>

        </div>
        <div class="bjrSession">
           <?php
              echo "Bienvenue " . $_SESSION['nom'] . " !";
        ?>
        </div>

        <?php
         include("nav.php")
        ?>
       

    </header>

    <div class="content">

      <h1 class="flip-horizontal-bottom">Matching code game</h1>
      <p>Apprend les bases de la programmation de façon ludique!</p>
      <div class="btn-go"><a href="./choixLangage.php">Let's go!</a></div>
    </div>
  </div>

</body>

</html>