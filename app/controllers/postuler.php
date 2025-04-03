<?php
session_start();
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['user_id']) && $_SESSION['role'] === 'candidat') {
    $offre_id = $_POST['offre_id'];
    $user_id = $_SESSION['user_id'];

    // Vérifie si l'étudiant a déjà postulé à cette offre
    $check = $pdo->prepare("SELECT id FROM candidatures WHERE utilisateur_id = ? AND offre_id = ?");
    $check->execute([$user_id, $offre_id]);

    if ($check->rowCount() === 0) {
        $insert = $pdo->prepare("INSERT INTO candidatures (utilisateur_id, offre_id) VALUES (?, ?)");
        $insert->execute([$user_id, $offre_id]);
    }

    header("Location: ../views/utilisateurs/profil_etudiant.php"); // Redirection après candidature
    exit;
} else {
    // Rediriger ailleurs si la méthode ou le rôle n'est pas correct
    header("Location: ../../index.php");
    exit;
}
