    
<?php

  try {

    $nom = isset($_POST['Nom']) ? htmlspecialchars($_POST['Nom']) : '';
    $prenom = isset($_POST['Prenom']) ? htmlspecialchars($_POST['Prenom']) : '';
    $sexe = isset($_POST['Sexe']) ? htmlspecialchars($_POST['Sexe']) : '';
    $domaine = isset($_POST['Domaine']) ? htmlspecialchars($_POST['Domaine']) : '';
    $age = isset($_POST['Age']) ? htmlspecialchars($_POST['Age']) : '';
    $telephone = isset($_POST['Telephone']) ? htmlspecialchars($_POST['Telephone']) : '';
    $encadreur = "";

    switch($domaine) {
      case 'Programmation' :
        $encadreur = 'Mr Didier';
        break;
      case 'Reseau' :
        $encadreur = 'Mr Frank';
        break;
      case 'Cloud Computing' :
        $encadreur = 'Mr Cyril';
        break;
      case 'Infographie' :
        $encadreur = 'Mr Cedric';
        break;
      case 'Audio Visuel' :
        $encadreur = 'Mr Cedric';
        break;
      case 'Marketing Digital' :
        $encadreur = 'Mme lilliane';
        break;
    }

    $db = new PDO("mysql:host=localhost; dbname=inov", "root", "");

    $req = $db->prepare("INSERT INTO stagiaire(NOM, PRENOM, SEXE, DOMAINE, AGE, ENCADREUR, TELEPHONE) 
                                VALUES(:nom, :prenom, :sexe, :domaine, :age, :encadreur, :telephone)");
    $req->execute(array(
      'nom' => $nom,
      'prenom' => $prenom,
      'sexe' => $sexe,
      'domaine' => $domaine,
      'age' => $age,
      'encadreur' => $encadreur,
      'telephone' => $telephone
    )); 

  }catch(Exception $e) {
      die('ERROR ' . $e->getMessage());
  }

  header('location:dash.php');

?>

