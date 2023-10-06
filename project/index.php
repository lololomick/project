<?php 
    session_start();
    require('php/functions.php');
    error_reporting(E_ALL);
    ini_set('log_errors', 1);
    ini_set('error_log', 'error.txt');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link rel="stylesheet" href="css/home.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" href="css/footerform.css" type="text/css">
        <script src="js/script.js"></script>
        <script src="https://kit.fontawesome.com/5bb7bb3e3a.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Project 2</title>
    </head>
    <body>
        <header class="header sticky sticky--top js-header">
            <div class="grid">
              <nav class="navigation">
                <ul class="list list_inline">
                  <li class="nav_item"><a href="index.php" class="nav_link img_nav"><img class="nav_img" src="img/logo.png" alt="logo"></a></li>
                  <li class="nav_item"><a href="index.php" class="nav_link nav_link_active">Home</a></li>
                  <li class="nav_item"><a href="bestuur.php" class="nav_link">Over ons</a></li>
                  <li class="nav_item"><a href="nieuws.php" class="nav_link">Nieuws</a></li>
                  <li class="nav_item"><a href="doneren.php" class="nav_link">Doneren</a></li>
                  <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
                </ul>
              </nav>
            </div>
        </header>
        <main>
            <section>
                <div class="container">
                    <?php load_nieuws() ?>
                    <img class="baseimage" src="img/placeholder.jpg" alt="">
                    <div class="button_background">
                       <a class="cta1 button" href="contact.php">Contact</a>
                       <a class="cta2 button" href="doneren.php">Doneren</a>
                    </div>
                    <?php load_nieuws_klein() ?>  
                </div>
            </section>
        </main>
        <footer class="footer">
           <div class="area1">
                <img src="img/logo.png" alt="logo">
                <br>
                <br>
                <div class="links">
                    <a class="fa-brands fa-facebook fa-beat" href="https://www.facebook.com/JOVDonline/"></a>
                    <a class="fa-brands fa-twitter fa-beat" href="https://twitter.com/jovd"></a>
                    <a class="fa-brands fa-instagram fa-beat" href="https://www.instagram.com/jovdonline/"></a>
                </div>
           </div>
           <div class="index">
                <h2>Index</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bestuur.php">Over ons</a></li>
                    <li><a href="nieuws.php">Nieuws</a></li>
                    <li><a href="doneren.php">Doneren</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
           </div>
           <div class="jovd">
                <h2>Afdelingen</h2>
                <ul>
                    <li>Flevoland</li>
                    <li>Rijk van Nijmegen</li>
                    <li>Apeldoorn</li>
                    <li>Zwolle</li>
                    <li>Utrecht</li>
                </ul>
           </div>
           <div class="signup">
                <a href="/" class="fa-regular fa-envelope"></a>&nbsp;blijf up to date met de JOVD!
                <form method="POST" action="php/functions.php">
                    <div class="input-div">
                      <input name="email" type="text" id="e-mail" required="required">
                      <label for="e-mail" class="label">E-mail:</label>
                      <div class="onderlijn"></div>
                    </div>
                    <input type="submit" name="aanmelden">
                </form>
           </div>
        </footer>
    </body>
</html>