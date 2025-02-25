

<?php

    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    try {
        $bdd = new PDO("mysql:host=localhost; dbname=inov", "root", "",
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('ERROR ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM administrator");
    $i = 0;
    
    while($donnee = $req->fetch()) {
        if($donnee['NOM'] == $name AND $donnee['PASS'] == $password) {
            $i = 1; 
        }
    }

    if($i == 1) {
        header('location: dash.php');
        session_start();
        $_SESSION['nom'] = $name;
    }else {
        header('location: connection.php?error=1&pseudo'.$name.'&password'.$password); 
    }
?>
