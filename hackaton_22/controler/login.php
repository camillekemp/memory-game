<?php


session_start();

include "../connexion/db.php";

try{
    
    $email=filter_input (INPUT_POST,'email');
    $pass=filter_input (INPUT_POST, 'pass');
    
    
    try{
        $db= new PDO (DBDRIVER.': host='.DBHOST.';port='.DBPORT.';dbname='.DBNAME.';charset='.DBCHARSET, DBUSER, DBPASS); 
    } 
    catch (Exception $e) {
        die('Erreur');
    }
    
    
    
    $sql= "SELECT pass FROM user WHERE email = :email";
    $statement= $db->prepare($sql);
    $statement->bindValue (':email',$email);
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
        $SESSION['loginConnecte']=$email;

        header("location:../views/acceuil.php");
    }
    
    
} catch (Exception $ex) {
    
}