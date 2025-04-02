<?php
session_start();
require_once '../../config/config.php'; // adapte selon ton chemin

// Vérifie que l'utilisateur est une entreprise
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'entreprise') {
    header("Location: ../../utilisateurs/connexion.php");
    exit;
}

// Traitement formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST['titre'] ?? '';
    $domaine = $_POST['domaine'] ?? '';
    $localisation = $_POST['localisation'] ?? '';
    $duree = $_POST['duree'] ?? '';
    $mode = $_POST['mode'] ?? '';
    $entreprise_id = $_SESSION['user_id'];

    if ($titre && $domaine && $localisation && $duree && $mode) {
        $stmt = $pdo->prepare("INSERT INTO offres (titre, domaine, localisation, duree, mode, entreprise_id, created_at)
                               VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$titre, $domaine, $localisation, $duree, $mode, $entreprise_id]);
        $success = true;
    } else {
        $error = "Tous les champs sont requis.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Créer une offre</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f7fa;
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #2c3e50;
    }
    form {
      max-width: 500px;
      margin: 30px auto;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .input-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 6px;
      color: #34495e;
    }
    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }
    .btn {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }
    .btn:hover {
      background-color: #2980b9;
    }
    .message {
      text-align: center;
      margin-top: 10px;
    }
    .success {
      color: green;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>

  <h2>📝 Déposer une nouvelle offre</h2>

  <?php if (isset($success)): ?>
    <div class="message success">✅ Offre enregistrée avec succès !</div>
  <?php elseif (isset($error)): ?>
    <div class="message error">❌ <?= htmlspecialchars($error) ?></div>
  <?php endif; ?>

  <form method="post" onsubmit="return validateForm();">
    <div class="input-group">
      <label for="titre">Titre du poste</label>
      <input type="text" id="titre" name="titre" required>
    </div>

    <div class="input-group">
      <label for="domaine">Domaine</label>
      <select name="domaine" id="domaine" required>
        <option value="">-- Choisir un domaine --</option>
        <option>Développement</option>
        <option>Marketing</option>
        <option>Design</option>
        <option>Data / IA</option>
        <option>Communication</option>
        <option>Cloud</option>
        <option>Cybersécurité</option>
        <option>RH</option>
      </select>
    </div>

    <div class="input-group">
      <label for="localisation">Localisation</label>
      <input type="text" id="localisation" name="localisation" placeholder="Ex: Paris" required>
    </div>

    <div class="input-group">
      <label for="duree">Durée (en mois)</label>
      <input type="number" id="duree" name="duree" min="1" max="12" required>
    </div>

    <div class="input-group">
      <label for="mode">Mode</label>
      <select name="mode" id="mode" required>
        <option value="">-- Choisir un mode --</option>
        <option>Présentiel</option>
        <option>Hybride</option>
        <option>Télétravail</option>
      </select>
    </div>

    <button type="submit" class="btn">📤 Publier l'offre</button>
  </form>

  <script>
    function validateForm() {
      const duree = document.getElementById('duree').value;
      if (duree < 1 || duree > 12) {
        alert("Durée invalide (1 à 12 mois seulement)");
        return false;
      }
      return true;
    }
  </script>

</body>
</html>
