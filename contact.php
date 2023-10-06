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
      <link rel="stylesheet" href="css/bestuur.css" type="text/css">
      <link rel="stylesheet" href="css/home.css" type="text/css">
      <link rel="stylesheet" href="css/footer.css" type="text/css">
      <link rel="stylesheet" href="css/footerform.css" type="text/css">
      <link rel="stylesheet" href="css/contact.css" type="text/css">
      <script src="js/script.js"></script>
      <script src="https://kit.fontawesome.com/5bb7bb3e3a.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <title>Project 2</title>
  </head>
  <body >
    <div id="popupcontact" class="popupcontact">
      <?php popupcontact() ?>
    </div>
    <header class="header sticky sticky--top js-header">
        <div class="grid">
          <nav class="navigation">
            <ul class="list list_inline">
              <li class="nav_item"><a href="index.php" class="nav_link img_nav"><img class="nav_img" src="img/logo.png" alt="logo"></a></li>
              <li class="nav_item"><a href="index.php" class="nav_link">Home</a></li>
              <li class="nav_item"><a href="bestuur.php" class="nav_link">Over ons</a></li>
              <li class="nav_item"><a href="nieuws.php" class="nav_link">Nieuws</a></li>
              <li class="nav_item"><a href="doneren.php" class="nav_link">Doneren</a></li>
              <li class="nav_item"><a href="contact.php" class="nav_link nav_link_active">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header>
    <main>
      <section>
        <div class="container_contact">
          <img class="baseimage" src="img/nieuws/binnenhof.jpg" alt="">
          <h1>Neem contact op met ons.</h1>
          <form class="contactform" action="php/functions.php" method="POST">
            <input type="hidden" value="contact" name="contact">
            <input id="naam" type="text" name="naam" placeholder="Naam:" required="required">
            <input id="tel" type="number" name="telnummer" placeholder="Telefoon nummer:" required="required">
            <input id="email" type="email" name="email" placeholder="E-mail:" required="required">
            <input id="age" type="age" name="age" placeholder="Leeftijd:">
            <input id="text" type="text" name="text" placeholder="Vraag / Antwoord:" required="required">
            <input id="verstuur" type="submit" placeholder="Versturen">
          </form>
        </div>
      </section>
    </main>
    <?php require('php/footer.php'); ?>
  </body>
</html>