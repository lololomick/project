<?php 
    error_reporting(E_ALL);
    ini_set('log_errors', 1);
    ini_set('error_log', 'error.txt');
?>

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
   <div class="jovd donate">
          <?php topdonate(); ?>
          <?php recentdonate(); ?>
        </div>
   <div class="signup">
        <a href="/" class="fa-regular fa-envelope"></a>&nbsp;blijf up to date met de JOVD!
        <form method="POST" action="php/functions.php">
          <input type="hidden" value="signup" name="signup">
          <input placeholder="E-mail:" name="email" type="email" id="e-mail" required="required">
          <input class="inputform" type="submit" value="aanmelden" name="aanmelden">
        </form>
   </div>
</footer>
