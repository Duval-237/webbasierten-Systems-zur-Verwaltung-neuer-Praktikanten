<?php
  
  $error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inov Cameroon</title>
    <link rel="shortcut icon" href="img/inovq.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
     integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==
     "crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="connection.css">
  </head>
  <body>
    <div class="box">
      <div class="box1">
        <img src="img/inov.png" alt="error">
        <div class="container">
          <h2>Sign in to Inov</h2>
          <div class="social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <p>or use your name account</p>
          <form action="cible2.php" method="POST">
            <div class="inputbox">
              <i class="fa-regular fa-user"></i>
              <input type="text" name="name" id="name" required placeholder="Name">
              <?php
                if($error != '')
                  echo '<i class="fa-sharp fa-solid fa-circle-xmark" color="red"></i>';
              ?>
            </div>
            <div class="inputbox">
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="password" id="password" required placeholder="password">
              <?php
                if($error != '')
                  echo '<i class="fa-sharp fa-solid fa-circle-xmark" color="red"></i>';
              ?>
            </div>
            <a href="#">Forgot your password?</a>
            <input type="submit" value="SIGN IN">
          </form>
        </div>
      </div>
      <div class="box2">
        <span></span>
        <span></span>
        <span></span>
        <div class="text">
          <h2>Hello, Friend!</h2>
          <p>Entrer vos donnees personnelles et commencez votre voyage avec nous</p>
          <a href="inscription.php">SIGN UP</a>
        </div>
      </div>
    </div>
  </body>
</html>
