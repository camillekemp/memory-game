<?php




include "../connexion/db.php";

    session_start();
    $nom=$_POST['nom'];
    $_SESSION['nom'] =$nom;
        
    
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
       // $_SESSION['nom'] = $nom;
        

        header("location:/Hackathon/views/acceuil.php");
    }
    
 