<?php 
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');

if (isset($_POST['doneren'])) {
  doneren();
}
if (isset($_POST['signup'])) {
  signup();
}
if (isset($_POST['contact'])) {
  contact();
}

function topdonate(){
    require("php/connect.php");
    $sql = "SELECT naam, donatie FROM project2_doneren ORDER BY donatie DESC LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    if (count($result) > 0) {
        echo "<div class='topdonatie'>
              <h2>Top donaties:</h2>
              <ol>";
              foreach ($result as $row) { 
                $item = $item + 1;
                echo "<li>" . $item . ". " . $row['naam'] . ": €" . $row['donatie'] . "</li>";
                }
              echo "</div>";
    }
}

function recentdonate(){
    require("php/connect.php");
    $sql = "SELECT naam, donatie FROM project2_doneren ORDER BY id DESC LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    if (count($result) > 0) {
        echo "<div class='recentdonatie'>
              <h2>Recente donaties:</h2>
              <ol>";
              foreach ($result as $row) { 
                $item = $item + 1;
                echo "<li>" . $item . ". " . $row['naam'] . ": €" . $row['donatie'] . "</li>";
                }
              echo "</div>";
    }
}

function load_nieuws_klein(){
    require("php/connect.php");
    $sql = "SELECT * FROM project2 ORDER BY id LIMIT 4"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    $temppic = 'img/nieuws/';
    $picture = '';
    if (count($result) > 0) {
        foreach ($result as $row) {
            $item = $item + 1;
            $picture = $temppic . $row['foto'] . '';
            $popupitem = "'popup" . $item . "'";
            $popup = '"shownews(' . $popupitem . ')"';
            echo "<div id='nieuws" . $item . "' onclick=" . $popup . " style='background-image:url(" . $picture . ");' class='nieuws_item nieuws" . $item ."'>
                    <h1>" . $row["titel"] . "</h1>
                    <p>" . $row["artikel_tekt_small"] ."</p>
                  </div>";
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
}

function load_nieuws(){
    require("php/connect.php");
    $sql = "SELECT * FROM project2 ORDER BY id LIMIT 4"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    $temppic = 'img/nieuws/';
    $picture = '';
    if (count($result) > 0) {
        foreach ($result as $row) {
            $item = $item + 1;
            $picture = $temppic . $row['foto'] . '';
            $popupitem = "'popup" . $item . "'";
            $popup = '"hidenews(' . $popupitem . ')"';
            echo "<div id='popup" . $item . "' style='visibility: hidden;' class='nieuws_item_groot nieuwshid" . $item ."'>
                    <div class='closebtn' onclick=" . $popup . "><h1>X</h1></div>
                    <img src='" . $picture . "' alt='foto' class='picturenews'>
                    <h1>" . $row["titel"] . "</h1>
                    <p>" . $row["artikel_tekt"] ."</p>
                  </div>";
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
}

function load_big_news(){
    require("php/connect.php");
    $sql = "SELECT * FROM project2 ORDER BY id DESC"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    $temppic = 'img/nieuws/';
    $picture = '';
    if (count($result) > 0) {
        foreach ($result as $row) {
            $item = $item + 1;
            $picture = $temppic . $row['foto'] . '';
            $popupitem = "'popup" . $item . "'";
            $popup = '"shownews(' . $popupitem . ')"';
            echo "<div id='nieuws" . $item . "' onclick=" . $popup . " style='background-image:url(" . $picture . ");' class='nieuws_item nieuws" . $item ."'>
                    <h1>" . $row["titel"] . "</h1>
                    <p>" . $row["artikel_tekt_small"] ."</p>
                  </div>";
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
}

function load_big_news2(){
    require("php/connect.php");
    $sql = "SELECT * FROM project2 ORDER BY id DESC"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $item = 0;
    $temppic = 'img/nieuws/';
    $picture = '';
    if (count($result) > 0) {
        foreach ($result as $row) {
            $item = $item + 1;
            $picture = $temppic . $row['foto'] . '';
            $popupitem = "'popup" . $item . "'";
            $popup = '"hidenews(' . $popupitem . ')"';
            echo "<div id='popup" . $item . "' style='visibility: hidden;' class='nieuws_item_groot nieuwshid" . $item ."'>
                    <div class='closebtn' onclick=" . $popup . "><h1>X</h1></div>
                    <img src='" . $picture . "' alt='foto' class='picturenews'>
                    <h1>" . $row["titel"] . "</h1>
                    <p>" . $row["artikel_tekt"] ."</p>
                  </div>";
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
}


function signup(){
    session_start();
    require("connect.php");
    $email = $_POST['email'];
    $_SESSION["email"] = $email;
    $sql = "INSERT INTO project2_signup (email) VALUES (?)"; 
    $stmt= $conn->prepare($sql);
    $stmt->execute([$email]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        header("Location: ../index.php");
    }
    header("Location: ../index.php");
}

function doneren(){
    session_start();
    require("connect.php");
    $naam = $_POST["naam"];
    $datum = $_POST["geboortedatum"];
    $email = $_POST["email"];
    $telefoon = $_POST["telefoon"];
    $donatie = $_POST["donatie_geld"];
    $_SESSION["naam"] = $naam;
    $_SESSION["donatie"] = $donatie;

    $sql = "INSERT INTO project2_doneren (naam , datum , email , telefoonnummer, donatie)  VALUES (?,?,?,?,?)"; 
    $stmt= $conn->prepare($sql); 
    $stmt->execute([$naam , $datum , $email , $telefoon, $donatie]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        header("Location: ../doneren.php");
    }
    header("Location: ../doneren.php");
}

function contact(){
    session_start();
    require("connect.php");
    $naam = $_POST["naam"];
    $tel = $_POST["telnummer"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $text = $_POST["text"];
    $_SESSION["naam"] = $naam;

    
    $sql = "INSERT INTO project2_contact (naam, email, telnummer, leeftijd, usrtext)  VALUES (?,?,?,?,?)"; 
    $stmt= $conn->prepare($sql); 
    $stmt->execute([$naam, $email, $tel, $age, $text]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        header("Location: ../contact.php");
    }
    header("Location: ../contact.php");
}

function popupdoneren(){
    if (isset($_SESSION["naam"])) {
        echo "<script>showpopup();</script>";
        echo "Bedankt voor de donatie " . $_SESSION['naam'] . "<br>We vinden het super dat mensen donatie's doen zoals uw: " . $_SESSION["donatie"] . ".";
        session_destroy();
        echo "<script>hidecontact();</script>";
    } else {
        echo "<script>hidepopup();</script>";
    }
}

function signuppopup(){
    if (isset($_SESSION["email"])) {
        echo "<script>showpopup();</script>";
        echo "Bedankt voor het lid worden van onze nieuwsbrief<br>We sturen af en toe een nieuws bericht naar dit email adress: " . $_SESSION['email'] . ".";
        session_destroy();
        echo "<script>hidecontact();</script>";
    } else {
        echo "<script>hidepopup();</script>";
    }
}

function popupcontact(){
    if (isset($_SESSION["naam"])) {
        echo "<script>showpopup();</script>";
        echo "Bedankt voor het contact opnemen<br>We nemen zo snel mogelijk contact met u op " . $_SESSION["naam"] . ".";
        session_destroy();
        echo "<script>hidecontact();</script>";
    } else {
        echo "<script>hidepopup();</script>";
    }
}
?>