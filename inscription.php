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
    <link rel="stylesheet" href="inscription.css">
  </head>
  <body>
    <div class="box">
      <div class="box1">
        <span></span>
        <span></span>
        <span></span>
        <div class="text">
          <h2>Welcome Back!</h2>
          <p>pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
          <a href="connection.php">SIGN IN</a>
        </div>
      </div>
      <div class="box2">
        <img src="img/inov.png" alt="error">
        <div class="container">
          <h2>Create Account</h2>
          <div class="social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <p>or use your email for registration</p>
          <form action="cible1.php" method="POST">
            <div class="inputbox">
                <i class="fa-regular fa-user"></i>
                <input type="text" name="nom" id="nom" required placeholder="Name">
            </div>
            <div class="inputbox">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" name="email" id="email" required placeholder="Email">
            </div>
            <div class="inputbox">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password" required placeholder="password">
            </div>
            <input type="submit" value="SIGN UP" onclick="verifier()">
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
