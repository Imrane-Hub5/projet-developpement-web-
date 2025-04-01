<?php
require_once '../../config/config.php';

// Vérifie si les données sont envoyées en POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sécurise et récupère les données du formulaire
    $email = trim($_POST['email']);
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $niveau = $_POST['niveau'];
    $domaine = $_POST['domaine'];
    $date_dispo = $_POST['date'];
    $ville = $_POST['ville'];
    $type = $_POST['type'];
    $duree = $_POST['duree'];
    $mode = $_POST['mode'];
    $password = $_POST['password'];
    $role = "candidat";
    $cv = ''; // à gérer plus tard si tu veux enregistrer le fichier

    // Vérifie si l’email est déjà utilisé
    $check = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
    $check->execute([$email]);
    if ($check->rowCount() > 0) {
        die("❌ Un compte avec cet email existe déjà. <a href='../views/utilisateurs/inscription.php'>Retour</a>");
    }

    // Vérifie le mot de passe (majuscule, chiffre, caractère spécial, min 8)
    if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
        die("❌ Le mot de passe doit contenir au moins une majuscule, un chiffre, un caractère spécial et 8 caractères. <a href='../views/utilisateurs/inscription.php'>Retour</a>");
    }

    // Vérifie le nom et prénom
    if (!preg_match('/^[a-zA-ZÀ-ÿ\-\'\s]{2,}$/u', $nom) || !preg_match('/^[a-zA-ZÀ-ÿ\-\'\s]{2,}$/u', $prenom)) {
        die("❌ Nom ou prénom invalide. <a href='../views/utilisateurs/inscription.php'>Retour</a>");
    }

    // Hachage du mot de passe
    $mot_de_passe = password_hash($password, PASSWORD_DEFAULT);

    // Enregistre l'utilisateur
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, telephone, mot_de_passe, role, domaine) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $email, $mot_de_passe, $role, $domaine]);

    // Redirige avec succès
    header("Location: ../views/utilisateurs/connexion.php?success=1");
    exit;
} else {
    echo "⚠️ Accès non autorisé.";
}
?>
