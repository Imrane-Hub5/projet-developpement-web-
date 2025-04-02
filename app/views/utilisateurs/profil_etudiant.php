<?php
session_start();

// Vérification que l'utilisateur est connecté et est un étudiant
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'candidat') {
    header("Location: connexion.php");
    exit;
}

// Inclure le header
include('../includes/header.php');
?>

<main class="inscription-container">
    <h2 class="form-title">Bienvenue sur ton profil étudiant 👩‍🎓</h2>

    <section class="input-group">
        <h3>🧾 Tes informations personnelles</h3>
        <p><strong>Nom :</strong> <?= htmlspecialchars($_SESSION['nom'] ?? 'Non défini') ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($_SESSION['email'] ?? 'Non défini') ?></p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($_SESSION['telephone'] ?? 'Non défini') ?></p>
        <p><strong>Domaine :</strong> <?= htmlspecialchars($_SESSION['domaine'] ?? 'Non défini') ?></p>

    </section>

    <section class="input-group">
        <h3>📄 Ton CV</h3>
        <form action="upload_cv.php" method="post" enctype="multipart/form-data">
            <input type="file" name="cv" accept=".pdf" required>
            <button type="submit" class="btn-continue">Téléverser le CV</button>
        </form>
    </section>

    <section class="input-group">
        <h3>🗣️ Description personnelle</h3>
        <form action="update_description.php" method="post">
            <textarea name="description" rows="5" placeholder="Décris-toi ici..." required></textarea>
            <button type="submit" class="btn-continue">Mettre à jour</button>
        </form>
    </section>

    <section class="input-group">
        <h3>💡 Ta Wishlist</h3>
        <p>(À afficher dynamiquement selon les stages ajoutés en favoris...)</p>
    </section>

    <section class="input-group">
        <h3>📋 Tes candidatures</h3>
        <p>(À remplir plus tard avec les candidatures faites.)</p>
    </section>
</main>

<?php include('../includes/footer.php'); ?>

<style>
/* === Style pour la page profil étudiant === */

.inscription-container {
  max-width: 800px;
  margin: 40px auto;
  padding: 30px;
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
  font-family: 'Segoe UI', sans-serif;
  color: #2c3e50;
}

.form-title {
  font-size: 28px;
  text-align: center;
  margin-bottom: 30px;
  color: #1e90ff;
}

.input-group {
  background-color: #f7f9fc;
  padding: 20px;
  margin-bottom: 25px;
  border-left: 5px solid #1e90ff;
  border-radius: 10px;
}

.input-group h3 {
  margin-top: 0;
  color: #34495e;
}

.input-group p {
  margin: 8px 0;
  line-height: 1.6;
}

.input-group form {
  margin-top: 10px;
}

.input-group input[type="file"],
.input-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccd6dd;
  border-radius: 8px;
  margin-top: 10px;
  font-size: 14px;
}

.input-group textarea {
  resize: vertical;
}

.btn-continue {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #1e90ff;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.2s;
}

.btn-continue:hover {
  background-color: #0f6cd4;
}
</style>
