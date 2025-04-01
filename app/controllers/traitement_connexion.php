
<?php
session_start();
file_put_contents(__DIR__ . "/debug_log.txt", "Formulaire reçu !\n", FILE_APPEND);


// Connexion à la base de données
$host = '127.0.0.1';
$dbname = 'easystage';
$dbuser = 'root'; 
$dbpass = ''; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Vérification des champs
    if (empty($username) || empty($password)) {
        header('Location: ../views/utilisateurs/connexion.php?error=Champs requis');
        exit;
    }

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Rechercher l’utilisateur (étudiant ou entreprise) par email
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            // Connexion réussie → stocker dans la session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['nom'] = $user['nom'] ?? '';
            $_SESSION['prenom'] = $user['prenom'] ?? '';

            // Rediriger selon le rôle
            if ($user['role'] === 'candidat') {
                header('Location: ../views/utilisateurs/profil_etudiant.php');
                exit;
            } elseif ($user['role'] === 'entreprise') {
                header('Location: ../views/utilisateurs/profil_entreprise.php');
                exit;
            } else {
                header('Location: ../views/utilisateurs/connexion.php?error=Rôle inconnu');
                exit;
            }
        } else {
            header('Location: ../views/utilisateurs/connexion.php?error=Identifiants incorrects');
            exit;
        }
    } catch (PDOException $e) {
        header('Location: ../views/utilisateurs/connexion.php?error=Erreur de base de données');
        exit;
    }
} else {
    header('Location: ../views/utilisateurs/connexion.php');
    exit;
}
