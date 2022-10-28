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
        <a href="/Hackathon/views/acceuil.php"><img src="../assets/img/test4.gif"></a>
    
    </div>
    <!-- progressing bar -->
    
    <div id="progressBar">
        <div id="progressBarFull"></div>
    </div>
    
    <!-- menu -->
    <?php
        include("nav.php")
    ?>
</div>
    <div class=container>


        <div class="game-info">
                    <div class="info"></div>
                    <div class="score"> </div>
                    <div class="time"><span></span></div>
        </div>
    
                <!-- Chrono -->
        <div id="wrapper">
            <div id="chrono">00:00</div>
            <div id="buttons">
            </div>
        </div>
        <section class="memory-game">

            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/htmlManche2/1.png" alt="Aurelia" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="aurelia">
                <img class="front-face" src="../assets/img/htmlManche2/2.png" alt="Aurelia" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/htmlManche2/3.png" alt="Vue" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="vue">
                <img class="front-face" src="../assets/img/htmlManche2/4.png" alt="Vue" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/htmlManche2/5.png" alt="Angular" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="angular">
                <img class="front-face" src="../assets/img/htmlManche2/6.png" alt="Angular" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/htmlManche2/7.png" alt="Ember" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>
            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../assets/img/htmlManche2/8.png" alt="Ember" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="xx">
                <img class="front-face" src="../assets/img/htmlManche2/9.png" alt="Ember" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>

            <div class="memory-card" data-framework="xx">
                <img class="front-face" src="../assets/img/htmlManche2/10.png" alt="Ember" />
                <img class="back-face" src="/Hackathon/assets/img/htmlManche1/backHTML.png" alt="html Badge" />
            </div>


        </section>
    </div>
    <script src="../assets/script/js/confetti.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <script src="../assets/script/js/scripthtml2.js"></script>
</body>

</html>