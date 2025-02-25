

<?php

    $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    
    try{
        $bdd = new PDO("mysql:host=localhost; dbname=inov", "root", "", 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(Exception $e) {
        die("ERROR " . $e->getMessage());
    }
    $req = $bdd->prepare("INSERT INTO administrator(NOM, EMAIL, PASS) 
                                    VALUES(:nom, :email, :pass)");
    $req->execute(array(
        'nom' => $nom,
        'email' => $email,
        'pass' => $password
    ));
    
    header("location: dash.php");

    //header("location: page.php");
?>
