  <?php include "start.php"; ?>

<?php
  try {

    $db = new PDO('mysql:host=localhost; dbname=inov', 'root', '');

    $edit = isset($_GET['edit']) ? htmlspecialchars($_GET['edit']) : '';

  } catch (Exception $e) {
    die('ERROR '. $e->getMessage());
  }
?>

<div class="form">
  <form action="cible_edit.php?id=<?php echo $edit ?>" method="post">
    <?php
      $req = $db->prepare("SELECT * FROM stagiaire WHERE ID=:edit");
      $req->execute(array(
        'edit' => $edit
      ));
      $donnee = $req->fetch();
    ?>
    <h2>Information</h2>
    <div class="inputBox">
      <label for="Nom">Name</label>
      <input type="text" name="Nom" id="Nom" value="<?php echo $donnee['NOM'] ?>" placeholder="Name" maxlength="255" required>
    </div>
    <div class="inputBox">
      <label for="Prenom">Frist name</label>
      <input type="text" name="Prenom" id="Prenom" value="<?php echo $donnee['PRENOM'] ?>" placeholder="Frist name" maxlength="255" required>
    </div>
    <div class="inputBox">
      <label for="Sexe">Sex</label>
      <select name="Sexe" id="Sexe">
        <option value="M" <?php if($donnee['SEXE'] == 'M') echo 'selected' ?>>Male</option>
        <option value="F" <?php if($donnee['SEXE'] == 'F') echo 'selected'; ?>>Feminine</option>
      </select>
    </div>
    <div class="inputBox">
      <label for="Domaine">Domain</label>
      <select name="Domaine" id="Domaine">
        <option value="Programmation" <?php if($donnee['DOMAINE'] == 'Programmation') echo 'selected' ?>>Programming</option>
        <option value="Reseau" <?php if($donnee['DOMAINE'] == 'Reseau') echo 'selected' ?>>Network</option>
        <option value="Cloud Computing" <?php if($donnee['DOMAINE'] == 'Cloud Computing') echo 'selected' ?>>Cloud Computing</option>
        <option value="Infographie" <?php if($donnee['DOMAINE'] == 'Infographie') echo 'selected' ?>>Infographics</option>
        <option value="Audio Visuel" <?php if($donnee['DOMAINE'] == 'Audio Visuel') echo 'selected' ?>>Visual Audio</option>
        <option value="Marketing Digital" <?php if($donnee['DOMAINE'] == 'Marketing Digital') echo 'selected' ?>>Digital Marketing</option>
      </select>
    </div>
    <div class="inputBox">
      <label for="Age">Age</label>
      <input type="text" name="Age" id="Age" value="<?php echo $donnee['AGE'] ?>" placeholder="Age" maxlength="3" required>
    </div>
    <div class="inputBox">
      <label for="Telephone">Phone number</label>
      <input type="text" name="Telephone" id="Telephone" value="<?php echo $donnee['TELEPHONE'] ?>" placeholder="Telephone" maxlength="255" required>
    </div>
    <div class="inputBox">
      <input type="submit" value="Edit">
    </div>
  </form>
</div>


<?php include "end.php"; ?>
