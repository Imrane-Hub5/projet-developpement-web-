<?php
session_start();

// Connexion à la base
$host = '127.0.0.1';
$dbname = 'easystage';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur BDD : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        header('Location: ../views/utilisateurs/connexion.php?error=Champs requis');
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    file_put_contents(__DIR__ . "/debug_user.txt", print_r($user, true));


    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['nom'] = $user['nom'] ?? '';
        $_SESSION['prenom'] = $user['prenom'] ?? '';
        $_SESSION['telephone'] = $user['telephone'] ?? '';
        $_SESSION['domaine'] = $user['domaine'] ?? '';

        // Redirection selon le rôle
        if ($user['role'] === 'candidat') {
            header('Location: ../views/utilisateurs/profil_etudiant.php');
        } elseif ($user['role'] === 'entreprise') {
            header('Location: ../views/utilisateurs/profil_entreprise.php');
        } else {
            header('Location: ../views/utilisateurs/connexion.php?error=Rôle inconnu');
        }
        exit;
    } else {
        header('Location: ../views/utilisateurs/connexion.php?error=Identifiants incorrects');
        exit;
    }
} else {
    header('Location: ../views/utilisateurs/connexion.php');
    exit;
}
