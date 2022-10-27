<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/inscription.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <header>
        <div class="head">

            <!-- logo -->

            <div id="logo">
                <a><img src="/Hackathon/assets/img/test4.gif"></a>

            </div>

            <!-- menu -->

        </div>
    </header>

    <div class="formulaire">
        <form action="/Hackathon/controler/inscription.php" method="post">
            <div>
                <h2>Inscription</h2>
            </div>
            <div>
                <div><label for="">Email</label></div>
                <input name="email" required type="email">
            </div>

            <div>
                <div><label for="">Nom</label></div>
                <input name="nom" required type="text">
            </div>

            <div>
                <div><label for="">Mot de passe</label></div>
                <input name="pass" required class="mdp" type="password">
            </div>

            <p class="icon-see">

                <span id="see" title="Voir/cacher le mot de passe" onclick="showPassword()" class="material-symbols-outlined">
                    visibility
                </span>
            </p>

            <div>
                <div><label for="">Confirmer mot de passe</label></div>
                <input name="repass" required class="mdp" type="password">
            </div>

            <p class="icon-see">

                <span id="see" title="Voir/cacher le mot de passe" onclick="showPassword()" class="material-symbols-outlined">
                    visibility
                </span>
            </p>

            <button>S'inscrire</button>
            <div class="msgInscription"><a href="/Hackathon/views/formlogin.php">Vous avez déjà un compte? Connectez-vous</a></div>
        </form>
    </div>
    <script src="/Hackathon/assets/script/js/showPassword.js">
    </script>
</body>

</html>