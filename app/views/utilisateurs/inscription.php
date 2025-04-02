<?php
session_start();
require_once '../../config/config.php';

// Vérification
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'entreprise') {
    header("Location: connexion.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Profil Entreprise</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      padding: 30px;
    }

    .header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 30px;
    }

    .header img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      background: #eee;
    }

    .header h2 {
      margin: 0;
      color: #2c3e50;
    }

    .actions {
      display: flex;
      gap: 20px;
      margin-bottom: 30px;
    }

    .actions button {
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .actions button:hover {
      background-color: #2980b9;
    }

    .form-section {
      display: none;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-section h3 {
      margin-top: 0;
    }

    .form-section .input-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .btn-submit {
      margin-top: 15px;
      width: 100%;
      padding: 12px;
      background: #27ae60;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .btn-submit:hover {
      background: #219150;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- En-tête Entreprise -->
    <div class="header">
      <img src="/public/assets/images/logo.png" alt="Logo entreprise">
      <div>
        <h2><?= htmlspecialchars($_SESSION['nom']) ?></h2>
        <p><strong>Domaine :</strong> <?= htmlspecialchars($_SESSION['domaine']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($_SESSION['email']) ?></p>
      </div>
    </div>

    <!-- Actions -->
    <div class="actions">
      <button onclick="toggleForm()">➕ Ajouter une offre</button>
      <button onclick="location.href='mes_offres.php'">📄 Mes Offres</button>
      <button onclick="location.href='candidatures.php'">📥 Candidatures</button>
    </div>

    <!-- Formulaire Ajout -->
    <div class="form-section" id="formAjout">
      <h3>Nouvelle Offre</h3>
      <form action="../controllers/AjoutOffreController.php" method="post">
        <div class="input-group">
          <label for="titre">Titre du poste</label>
          <input type="text" name="titre" required>
        </div>
        <div class="input-group">
          <label for="domaine">Domaine</label>
          <select name="domaine" required>
            <option value="">-- Choisir --</option>
            <option>Développement</option>
            <option>Marketing</option>
            <option>Design</option>
            <option>Data / IA</option>
            <option>Cybersécurité</option>
          </select>
        </div>
        <div class="input-group">
          <label for="localisation">Localisation</label>
          <input type="text" name="localisation" required>
        </div>
        <div class="input-group">
          <label for="duree">Durée (mois)</label>
          <input type="number" name="duree" min="1" max="12" required>
        </div>
        <div class="input-group">
          <label for="mode">Mode</label>
          <select name="mode" required>
            <option value="">-- Choisir --</option>
            <option>Présentiel</option>
            <option>Hybride</option>
            <option>Télétravail</option>
          </select>
        </div>

        <button type="submit" class="btn-submit">📤 Publier</button>
      </form>
    </div>
  </div>

  <script>
    function toggleForm() {
      const form = document.getElementById('formAjout');
      form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
    }
  </script>

</body>
</html>
