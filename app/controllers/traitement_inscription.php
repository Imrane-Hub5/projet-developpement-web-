<?php
require_once __DIR__ . '/../config/config.php';

// Sécurité : vérifier que le formulaire a été soumis en POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../views/utilisateurs/inscription.php");
    exit;
}

// Récupérer les données
$role = $_POST['role'];
$email = trim($_POST['email']);
$nom = trim($_POST['nom']);
$prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
$telephone = trim($_POST['telephone']);
$domaine = $_POST['domaine'];
$password = $_POST['password'];

// Pour les candidats (étudiants)
$niveau = $_POST['niveau'] ?? null;
$ville = $_POST['ville'] ?? null;
$date_dispo = $_POST['date'] ?? null;
$type = $_POST['type'] ?? null;
$duree = $_POST['duree'] ?? null;
$mode = $_POST['mode'] ?? null;

// Vérifier que l’email n’existe pas
$check = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
$check->execute([$email]);
if ($check->rowCount() > 0) {
    header("Location: ../views/utilisateurs/inscription.php?erreur=existe");
    exit;
}

// Vérification du mot de passe (majuscule, chiffre, min 8 caractères)
if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
    header("Location: ../views/utilisateurs/inscription.php?erreur=mdp");
    exit;
}

// Hachage du mot de passe
$mot_de_passe = password_hash($password, PASSWORD_DEFAULT);

// Insertion
$stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, telephone, mot_de_passe, role, domaine) 
                       VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([
    $nom,
    $prenom,
    $email,
    $telephone,
    $mot_de_passe,
    $role,
    $domaine
]);

// ✅ Succès
header("Location: ../views/utilisateurs/inscription.php?success=ok");
exit;