<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Memory Game</title>

    <link rel="stylesheet" href="/Hackathon/assets/css/cards.css">
    <link rel="stylesheet" href="/Hackathon/assets/css/styleHtml1.css">
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
            // include("nav.php")
            ?>
        </div>
    </header>

    <div class=container>


        <div class="game-info">
            <div class="info">Le score est de :</div>
            <div class="score"> 0</div>
            <div class="time"><span>00:00</span></div>
        </div>

        <section class="memory-game">

            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/phpManche2/1.png" alt="Aurelia" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/phpManche2/2.png" alt="Aurelia" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/phpManche2/3.png" alt="Vue" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/phpManche2/4.png" alt="Vue" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/phpManche2/5.png" alt="Angular" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/phpManche2/6.png" alt="Angular" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/phpManche2/7.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/phpManche2/8.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="ee">
                <img class="front-face" src="../assets/img/phpManche2/9.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="ee">
                <img class="front-face" src="../assets/img/phpManche2/10.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backPHP.png" alt="html Badge" />
            </div>




        </section>
    </div>
    <script src="../assets/script/js/scriptphp2.js"></script>
</body>

</html>