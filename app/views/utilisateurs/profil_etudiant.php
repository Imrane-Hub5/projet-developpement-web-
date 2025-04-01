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
        <p><strong>Nom :</strong> <?= htmlspecialchars($_SESSION['username']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($_SESSION['email']) ?></p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($_SESSION['telephone']) ?></p>
        <p><strong>Domaine :</strong> <?= htmlspecialchars($_SESSION['domaine']) ?></p>
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
