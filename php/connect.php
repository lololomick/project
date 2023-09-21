<?php
$db_server = 'rdbms.strato.de';
$db_user = 'dbu1773897';
$db_password = 'H0ldMyB3er!';
$db_name = 'dbs11571618';

try {
$dbh = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
echo 'Verbinding met de database is succesvol tot stand gebracht.';
} catch (PDOException $e) {
die('Verbindingsfout: ' . $e->getMessage());
}
?>