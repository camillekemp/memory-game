<?php

include "./connexion/db.php";

$score = $_GET['score'];

//echo($score);
try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    echo $e->getMessage();
    die();
}


$login=$_SESSION['loginConnecte'];

//base de données

// reprendre id user lié a id pointHTML et donc mettre le point dans la table html

$sql= "SELECT `user`.`id` FROM user INNER JOIN `scoresHtml` ON `user`.`id`= `scoreshtml`.`iduser`";
$stmt->prepare($sql);
if ($stmt->execute()) {
    $sql= "INSERT INTO `scoreshtml` (`id`, `iduser`, `pointHTML`) VALUES (NULL, :iduser, :pointHTML)";
    $stmt = $cnx->prepare ($sql);
    $stmt->bindValue (":pointHTML", $score);
    $stmt->execute ();
}



// ;



?>