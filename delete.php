  
<?php

try {

  $bd = new PDO("mysql:host=localhost;dbname=inov", "root", "");

  $delete = isset($_GET['delete']) ? htmlspecialchars($_GET['delete']) : '';
  
  $req =  $bd->prepare("DELETE FROM stagiaire WHERE ID = :del");
  $req->execute(
    array(
      "del" => $delete
    )
  );

  }catch(Exception $e) {
    die('ERROR ' . $e->getMessage());
  }

  header('location:dash.php');
?>

