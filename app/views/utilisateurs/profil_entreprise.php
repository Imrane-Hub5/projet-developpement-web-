
<?php
session_start();
require_once '../../config/config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'entreprise') {
    header("Location: connexion.php");
    exit;
}

$entreprise_id = $_SESSION['user_id'];
$nom_entreprise = $_SESSION['nom'] ?? 'Entreprise';

$stmt = $pdo->prepare("SELECT * FROM offres WHERE entreprise_id = ?");
$stmt->execute([$entreprise_id]);
$offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
include('../includes/header.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Profil Entreprise - <?= htmlspecialchars($nom_entreprise) ?></title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f7fa;
      margin: 0;
    }

    .container {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #2c3e50;
    }

    .btn {
      display: inline-block;
      background-color: #3498db;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      margin: 20px 0;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    .offre {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
    }

    .offre h3 {
      margin: 0;
      color: #34495e;
    }

    .offre p {
      margin: 5px 0;
      color: #555;
    }

    .no-offres {
      text-align: center;
      color: #888;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bienvenue, <?= htmlspecialchars($nom_entreprise) ?> 👋</h1>

    <a href="ajouter_offre.php" class="btn">➕ Ajouter une offre</a>

    <h2>📋 Vos offres publiées</h2>

    <?php if (count($offres) > 0): ?>
      <?php foreach ($offres as $offre): ?>
        <div class="offre">
          <h3><?= htmlspecialchars($offre['titre']) ?></h3>
          <p><strong>Domaine :</strong> <?= htmlspecialchars($offre['domaine']) ?></p>
          <p><strong>Durée :</strong> <?= htmlspecialchars($offre['duree']) ?> mois</p>
          <p><strong>Localisation :</strong> <?= htmlspecialchars($offre['localisation']) ?></p>
          <p><strong>Mode :</strong> <?= htmlspecialchars($offre['mode']) ?></p>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="no-offres">Aucune offre publiée pour l'instant.</div>
    <?php endif; ?>
  </div>
</body>
</html>
<?php include('../includes/footer.php'); ?>
