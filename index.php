<?php 
session_start(); 
require('php/connect.php');
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
                    <img class="baseimage" src="img/placeholder.jpg" alt="">
                    <div class="button_background">
                       <a class="cta1 button" href="contact.php">Contact</a>
                       <a class="cta2 button" href="#signup">Sign up</a>
                    </div>
                    <div class="nieuws_item nieuws1">
                    <?php require('php/homenieuws.php'); ?>
                    </div>
                    <div class="nieuws_item nieuws2">
                        <p>test</p>
                    </div>
                    <div class="nieuws_item nieuws3">
                        <p>test</p>
                    </div>
                    <div class="nieuws_item nieuws4">
                        <p>test</p>
                    </div>
                    <div id="signup" class="signup">
                        <p>test</p>
                        <input type="text" name="" id="">
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="cr-con"><a class="footer1" href="bestuur.php"">Over ons |</a> <a class="footer1" href="contact.php"  >contact info |</a>
              <a href="mailto: anil@jovd.nl" class="footer1">Email |</a> <a class="footer1" href="https://www.Facebook.com/"  >Facebook </a> <div class='cr-con'> Jongerenorganisatie Vrijheid en Democratie |  &copy; <script>document.write(new Date().getFullYear());</script> </div>
            </div>
        </footer>
    </body>
</html>