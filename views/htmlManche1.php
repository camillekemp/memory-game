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
                <a><img src="../assets/img/test4.gif"></a>

            </div>

            <!-- menu -->
            <?php
            //include("nav.php")
            ?>
        </div>
    </header>

    <div class=container>

        <div>

            <div class="game-info">
                <div class="info">Le score est de :</div>
                <div class="score"> 0</div>
                <div class="time"><span>00:00</span></div>
            </div>
        </div>


        <section class="memory-game">

            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/htmlManche1/1.png" alt="Aurelia" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/htmlManche1/2.png" alt="Aurelia" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/htmlManche1/3.png" alt="Vue" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/htmlManche1/4.png" alt="Vue" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/htmlManche1/5.png" alt="Angular" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/htmlManche1/6.png" alt="Angular" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/htmlManche1/7.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/htmlManche1/8.png" alt="Ember" />
                <img class="back-face" src="../assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            </div>
        </section>
      
    </div>
    <script src="../assets/script/js/scripthtml1.js"></script>
</body>

</html>