<?php include "start.php"?>

<div class="form">
  <form action="cible_add.php" method="post" id="form">
    <h2>Information</h2>
    <div class="inputBox">
      <label for="Nom">Name</label>
      <input type="text" name="Nom" id="Nom" placeholder="Name" maxlength="255" required>
    </div>
    <div class="inputBox">
      <label for="Prenom">First name</label>
      <input type="text" name="Prenom" id="Prenom" placeholder="First name" maxlength="255" required>
    </div>
    <div class="inputBox">
      <label for="Sexe">Sex</label>
      <select name="Sexe" id="Sexe">
        <option value="M">Male</option>
        <option value="F">Feminine</option>
      </select>
    </div>
    <div class="inputBox">
      <label for="Domaine">Domain</label>
      <select name="Domaine" id="Domaine">
        <option value="Programmation">Programming</option>
        <option value="Reseau">Network</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Infographie">Infographics</option>
        <option value="Audio Visuel">Visual audio</option>
        <option value="Marketing Digital">Digital Marketing</option>
      </select>
    </div>
    <div class="inputBox">
      <label for="Age">Age</label>
      <input type="text" name="Age" id="Age" placeholder="Age" maxlength="3" required>
    </div>
    <div class="inputBox">
      <label for="Telephone">Phone nomber</label>
      <input type="text" name="Telephone" id="Telephone" placeholder="Phone nomber" maxlength="255" required>
    </div>
    <div class="inputBox">
      <input type="submit" value="Add" class="add">
    </div>
  </form>
</div>


<?php include "end.php"?>