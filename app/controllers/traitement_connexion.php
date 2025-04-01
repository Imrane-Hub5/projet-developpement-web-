<?php
session_start();
require_once 'app\config\config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT id, password FROM etudiants WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
    
        $sql = "SELECT id, password FROM entreprises WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];  
        header("Location: dashboard.php"); 
        exit();
    } else {
        header("Location: connexion.php?error=1"); 
        exit();
    }
} else {
    die("Accès interdit.");
}
?>
