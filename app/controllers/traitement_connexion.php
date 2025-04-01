<?php
session_start();

// Connexion à la base de données
$host = '127.0.0.1';
$dbname = 'easystage_';
$dbuser = 'root'; 
$dbpass = 'easystage'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contrôle des champs (champ vide et format d'email)
    if (empty($username) || empty($password)) {
        header('Location: connexion.php?error=Tous les champs doivent être remplis');
        exit;
    }

    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        // Si l'username est un email, vérifier qu'il a un format correct
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            header('Location: connexion.php?error=Email invalide');
            exit;
        }
    }

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vérifier si le champ username est un email ou un nom d'utilisateur
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM etudiants WHERE email = :username";
        } else {
            $sql = "SELECT * FROM etudiants WHERE nom = :username OR phone_number = :username"; // Assurer que la colonne 'phone_number' existe dans ta base de données
        }

        // Préparer et exécuter la requête
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);

        // Vérifier si l'utilisateur existe
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            // Connexion réussie, démarrer la session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nom'];

            // Redirection vers le tableau de bord
            header('Location: dashboard.php');
            exit;
        } else {
            // Identifiants incorrects
            header('Location: connexion.php?error=Identifiants incorrects');
            exit;
        }
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion à la base de données
        header('Location: connexion.php?error=Erreur de connexion à la base de données');
        exit;
    }
} else {
    // Si la requête n'est pas une méthode POST, redirection vers la page de connexion
    header('Location: connexion.php');
    exit;
}
?>
