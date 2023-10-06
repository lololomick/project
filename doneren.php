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
      <link rel="stylesheet" href="css/doneren.css" type="text/css">
      <link rel="stylesheet" href="css/footer.css" type="text/css">
      <link rel="stylesheet" href="css/footerform.css" type="text/css">
      <script src="js/script.js"></script>
      <script src="https://kit.fontawesome.com/5bb7bb3e3a.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <title>Project 2</title>
  </head>
  <body>
    <div id="popupcontact" class="popupcontact">
      <?php popupdoneren() ?>
    </div>
    <header class="header sticky sticky--top js-header">
        <div class="grid">
          <nav class="navigation">
            <ul class="list list_inline">
              <li class="nav_item"><a href="index.php" class="nav_link img_nav"><img class="nav_img" src="img/logo.png" alt="logo"></a></li>
              <li class="nav_item"><a href="index.php" class="nav_link">Home</a></li>
              <li class="nav_item"><a href="bestuur.php" class="nav_link">Over ons</a></li>
              <li class="nav_item"><a href="nieuws.php" class="nav_link">Nieuws</a></li>
              <li class="nav_item"><a href="doneren.php" class="nav_link nav_link_active">Doneren</a></li>
              <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header>
    <main>
      <section>
      <div class="container">
        <img id="title" class="image" src="img/dies2048xfinal_21.jpg" alt="">
          <h1 class="Doneren">Doneren</h1>

          <form  class="form" action="php/functions.php" method="POST">
          <input type="hidden" value="doneren" name="doneren">
          <input class="naam" type="text"  placeholder="Naam" name="naam" required="required">
          <input type="date"  name="geboortedatum" class="geboortedatum" required="required">
          <input type="email"   placeholder="email" class="email" name="email" required="required">
          <input type="number"  placeholder="telefoonnummer" class="telefoonnummer" name="telefoon" required="required">
          <input type="number" step="0.01" placeholder="donatie" class="donatie" name="donatie_geld" required="required">
          <input type="submit" name="doneren" value="doneren"    id="button">
        </form>
      </div>


      </section>
    </main>
    <?php require('php/footer.php'); ?>
  </body>
</html>
