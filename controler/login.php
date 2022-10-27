<?php


session_start();

include "../connexion/db.php";

try{
    
    $email=filter_input (INPUT_POST,'email');
    $pass=filter_input (INPUT_POST, 'pass');
    $_POST["nom"] = $nom;
    
    
    try{
        $db= new PDO (DBDRIVER.': host='.DBHOST.';port='.DBPORT.';dbname='.DBNAME.';charset='.DBCHARSET, DBUSER, DBPASS); 
    } 
    catch (Exception $e) {
        die('Erreur');
    }
    
    
    
    $sql= "SELECT pass FROM user WHERE nom = :nom";
    $statement= $db->prepare($sql);
    $statement->bindValue (':nom',$nom);
    $statement->execute();
    
    $resultat= $statement->fetchAll (PDO::FETCH_ASSOC);
    
    $motDePasseDB=$resultat[0]['pass'];
    // var_dump ($motDePasseDB);
	// var_dump (password_verify ($pass,$motDePasseDB));
    
    if (!$pass===$motDePasseDB)
    {
        echo ('<br />Invalid pass');
    }
    else {
        $_SESSION["nom"] = $nom;

        header("location:/Hackathon/views/acceuil.php");
    }
    
    
} catch (Exception $ex) {
    
}