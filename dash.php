<?php include "start.php"; ?>

<?php

  try {
    $bd = new PDO('mysql:host=localhost; dbname=inov', 'root', '');
    
    $req = $bd->query("SELECT *  FROM stagiaire ORDER BY NOM");

    $nbre_stagiaire = $req->rowCount();
    echo '
        <div class="total">
          <span class="num">' . $nbre_stagiaire . '</span>
          <span class="text">'; 
          if($nbre_stagiaire > 1) 
            echo'Stagiaires'; 
          else
            echo 'Stagiaire';      
    echo '</span></div>';

    echo '<table>
      <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Domaine</th>
            <th>AGE</th>
            <th>Encadreur</th>
            <th>Telephone</th>
            <th colspan="2">Operations</th>
      </tr>';
    while($donne = $req->fetch()) {
      echo '
      <tr>
            <td>'. $donne['NOM'] .'</td>
            <td>'. $donne['PRENOM'] .'</td>
            <td>'. $donne['SEXE'] .'</td>
            <td>'. $donne['DOMAINE'].'</td>
            <td>'. $donne['AGE'] .'</td>
            <td>'. $donne['ENCADREUR'] .'</td>
            <td>'. $donne['TELEPHONE'] .'</td>
            <td class="red">
              <a href="delete.php?delete='.$donne['ID'].'" title="Delete">
                <ion-icon name="trash-outline"></ion-icon>
              </a>
            </td>
            <td>
              <a href="edit.php?edit='.$donne['ID'].'" title="Edit">
                <ion-icon name="create-outline"></ion-icon>
              </a>
            </td>
            </tr>
            ';
    }
    echo '</table>';
    $req->closeCursor();
  }catch(Exception $e) {
    
    die('ERROR ' . $e->getMessage());
    
  }
  ?>
  
<?php include "end.php"; ?>
