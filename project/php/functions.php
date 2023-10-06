<?php 
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');
function load_nieuws_klein(){
    require("php/connect.php");
    $sql = "SELECT * FROM project2 ORDER BY id DESC LIMIT 4"; 
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
    $sql = "SELECT * FROM project2 ORDER BY id DESC LIMIT 4"; 
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("connect.php");
    $email = $_POST['email'];
    $sql = "INSERT INTO project2_signup (email) VALUES (?)"; 
    $stmt= $conn->prepare($sql);
    $stmt->execute([$email]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        header("Location: ../index.php");
    }
    header("Location: ../index.php");
}

function donatie(){
    require("php/connect.php");
}
?>