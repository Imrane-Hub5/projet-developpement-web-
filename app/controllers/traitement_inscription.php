<?php
session_start();
require_once __DIR__ . '/../config/config.php';

// 🔐 Si l'utilisateur est déjà connecté (entreprise), on récupère ses offres
if (isset($_SESSION['user_id']) && $_SESSION['role'] === 'entreprise') {
    $entreprise_id = $_SESSION['user_id'];
    $stmt = $pdo->prepare("SELECT * FROM offres WHERE entreprise_id = ?");
    $stmt->execute([$entreprise_id]);
    $offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 📩 Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role       = $_POST['role'] ?? '';
    $nom        = trim($_POST['nom'] ?? '');
    $prenom     = trim($_POST['prenom'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $telephone  = trim($_POST['telephone'] ?? '');
    $password   = $_POST['password'] ?? '';
    $domaine    = $_POST['domaine'] ?? '';

    $mot_de_passe = password_hash($password, PASSWORD_DEFAULT);

    $niveau     = $_POST['niveau'] ?? null;
    $ville      = $_POST['ville'] ?? null;
    $date_dispo = $_POST['date'] ?? null;
    $type       = $_POST['type'] ?? null;
    $duree      = $_POST['duree'] ?? null;
    $mode       = $_POST['mode'] ?? null;

    // Vérifie si l’email est déjà utilisé
    $checkEmail = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
    $checkEmail->execute([$email]);
    
    if ($checkEmail->rowCount() > 0) {
        echo '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Email déjà utilisé</title>
            <link rel="stylesheet" href="../../../public/assets/css/style.css">
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f5f5f5;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .modal {
                    background: white;
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    padding: 1.5rem;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                    text-align: center;
                    max-width: 400px;
                    width: 90%;
                }
                .modal h2 {
                    margin-top: 0;
                    color: #e74c3c;
                }
                .modal button {
                    margin-top: 1rem;
                    padding: 0.6rem 1.2rem;
                    background-color: #3498db;
                    border: none;
                    color: white;
                    border-radius: 6px;
                    cursor: pointer;
                }
                .modal button:hover {
                    background-color: #2980b9;
                }
            </style>
        </head>
        <body>
            <div class="modal">
                <h2>😅 Oups !</h2>
                <p>Cet email est déjà utilisé.<br>Tu veux te connecter à la place ?</p>
                <button onclick="window.location.href=\'../views/utilisateurs/connexion.php\'">Se connecter</button>
            </div>
        </body>
        </html>';
        exit;
    }

    // Insertion dans la BDD
    $query = $pdo->prepare("
        INSERT INTO utilisateurs (
            nom, prenom, email, telephone, mot_de_passe, role, domaine,
            niveau, ville, date_dispo, type, duree, mode
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $success = $query->execute([
        $nom,
        $prenom ?: null,
        $email,
        $telephone,
        $mot_de_passe,
        $role,
        $domaine,
        $niveau,
        $ville,
        $date_dispo,
        $type,
        $duree,
        $mode
    ]);

    if ($success) {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        // Récupère l'ID inséré
        $_SESSION['user_id'] = $pdo->lastInsertId();

        // Redirection après inscription selon le rôle
        if ($role === 'candidat') {
            header("Location: ../views/utilisateurs/profil_etudiant.php");
            exit;
        } elseif ($role === 'entreprise') {
            header("Location: ../views/utilisateurs/profil_entreprise.php");
            exit;
        } else {
            echo "Rôle non reconnu.";
            exit;
        }
    } else {
        echo "Erreur lors de la création du compte. 🚨";
    }
} else {
    echo "Méthode non autorisée.";
}
