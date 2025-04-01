<?php
require_once __DIR__ . '/../config/config.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../views/utilisateurs/inscription.php");
    exit;
}

// 🔹 Récupération des données
$role = $_POST['role'];
$email = trim($_POST['email']);
$nom = trim($_POST['nom']);
$prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
$telephone = trim($_POST['telephone']);
$domaine = $_POST['domaine'];
$password = $_POST['password'];

// Pour les candidats
$niveau = $_POST['niveau'] ?? null;
$ville = $_POST['ville'] ?? null;
$date_dispo = $_POST['date'] ?? null;
$type = $_POST['type'] ?? null;
$duree = $_POST['duree'] ?? null;
$mode = $_POST['mode'] ?? null;

// 🔹 Vérifier si email existe déjà
$check = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
$check->execute([$email]);
if ($check->rowCount() > 0) {
    header("Location: ../views/utilisateurs/inscription.php?erreur=existe");
    exit;
}

// 🔹 Vérification mot de passe
if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
    header("Location: ../views/utilisateurs/inscription.php?erreur=mdp");
    exit;
}

$mot_de_passe = password_hash($password, PASSWORD_DEFAULT);

// 🔹 Insertion dans la base
$stmt = $pdo->prepare("INSERT INTO utilisateurs 
    (nom, prenom, email, telephone, mot_de_passe, role, domaine, niveau, ville, date_dispo, type, duree, mode) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([
    $nom,
    $prenom,
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

// 🔹 Rediriger vers la page de succès avec le rôle
header("Location: ../views/utilisateurs/inscription_validee.php?role=$role");
exit;
