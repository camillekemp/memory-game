<?php
session_start();
include "../connexion/db.php";	        
            
// Obtenir les données du formulaire	        
        
$nom = $_POST['nom'];	        
    
$email = filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);	        
        
if (!$email){	        
        
    // header()....	        
        
    // die();	        
        
}	        
    
        
$password = $_POST['pass'];	        
        
$repassword = $_POST['repass'];	        
// ( Filtrer les données )	        

// Connecter à la BD	        

try {	        
        
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);	        
        
} catch (Exception $e) {	        
        
    // jamais en production car ça montre des infos	        
        
    // sensibles	        
        
    echo $e->getMessage();	        
        
    die();	        
        
}	          
// il faut chercher le login dans la BD, on ne veut pas de doublons!	        
        

        
// Lancer l'insertion de l'utilisateur dans le tableau "user"	        
        
$sql = "INSERT INTO user (id, nom, email, pass) VALUES " .	        
        
    "(null , :nom , :email , :pass) ";	        
        
$stmt = $cnx->prepare ($sql);	        
        
$stmt->bindValue (":nom", $nom);	        
        
$stmt->bindValue (":email", $email);

$stmt->bindValue (":pass", $password);	                   
// Si tout ok , on va vers l'accueil après	        
        
// avoir stocké le login dans la session	        
        
// (utiliser $stmt->errorInfo())	        

if ($stmt->execute()){
    // echo "Bienvenue $nom";
    header("location:../views/formlogin.php");
}
else {
    var_dump ( $cnx->errorCode());
}


?>