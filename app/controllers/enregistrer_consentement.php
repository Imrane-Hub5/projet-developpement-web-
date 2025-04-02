<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_SERVER["REMOTE_ADDR"]; 

    
    $pdo = new PDO("mysql:host=localhost;dbname=ton_database", "root", "");

  
    $stmt = $pdo->prepare("INSERT INTO consentement_cookies (user_ip) VALUES (:ip)");
    $stmt->execute([":ip" => $ip]);

    echo "Consentement enregistré";
}
?>
