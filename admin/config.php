<?php
error_reporting(0);
$host = "localhost";
$dbname = "habersitesi";
$username = "habersitesi";
$password = "Ahmetkara44@";
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>