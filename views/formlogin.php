<!-- <html>

<body>
    <form action="../controler/login.php" method="POST">
        Email:<input type="text" name="email" />
        Mot de passe:<input type="password" name="pass" />
        Password:<input type="submit" />
    </form>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <header>
        <div class="head">

            <!-- logo -->

            <div id="logo">
                <a><img src="/Hackathon/assets/img/test4.gif"></a>

            </div>


        </div>
    </header>

    <div class="formulaire">
        <form action="/Hackathon/controler/login.php" method="post">
            <div>
                <h2>Connexion</h2>
            </div>
            <div>
                <div><label for="">Nom</label></div>
                <input name="nom" required type="text">
            </div>

            <div>
                <div><label for="">Mot de passe</label></div>
                <input required class="mdp" type="password" name="pass">
            </div>

            <div class="icon-see">

                <span id="see" title="Voir/cacher le mot de passe" onclick="showPassword()" class="material-symbols-outlined">
                    visibility
                </span>
            </div>

            <button>Connexion</button>
            <div class="msgInscription"><a href="/Hackathon/views/forminscription.php">Vous n'avez pas de compte? Inscrivez-vous</a></div>
        </form>
    </div>
    <script src="/Hackathon/assets/script/js/showPassword.js"></script>
</body>

</html>