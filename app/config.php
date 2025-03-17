<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "auth_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Échec de connexion à la base de données : " . $conn->connect_error);
}
?>
