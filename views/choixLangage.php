<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Hackathon/assets/css/choix.css">
</head>

<body>
    <header>
        <div class="head">

            <!-- logo -->

            <div id="logo">
                <a href="../index.html"><img src="../assets/img/test4.gif"></a>

            </div>

            <!-- menu -->
            <?php
             include("nav.php")
            ?>
        </div>
    </header>

    <h1>Choisis le langage que tu souhaites pratiquer</h1>


    <div class="container">

        <div class=bloc>
            <p>HTML (HyperText Markup Language) est un langage de description (dit de marquage) de pages Web. Il permet de présenter les documents hypertextes destinés à être affichés sur le navigateur. Il s'agit d'un langage coté client (tout comme CSS et Javascript). Il est supporté et développé par W3C.</p>
            <div class="btn-go"><a href="/Hackathon/views/htmlManche1.php">HTML</a></div>
        </div>

        <div class=bloc>
            <p>PHP (Hypertext Preprocessor) est un langage de programmation coté serveur, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. </p>
            <div class="btn-go"><a href="/Hackathon/views/phpManche1.php">PHP</a></div>
        </div>



</body>

</html>