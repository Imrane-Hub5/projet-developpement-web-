
<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header('Location: connexion.php');
    exit;
}

if ($_SESSION['role'] === 'candidat') {
    header('Location: profil_etudiant.php');
    exit;
} elseif ($_SESSION['role'] === 'entreprise') {
    header('Location: profil_entreprise.php');
    exit;
} else {
    echo "Rôle non reconnu.";
}
?>


<main class="inscription-container">
    <h2>Bienvenue, <?= htmlspecialchars($nom) ?> !</h2>
    
    <?php if ($role === 'candidat'): ?>
        <p>Tu es connecté en tant qu'<strong>étudiant</strong>. Tu peux :</p>
        <ul>
            <li>Voir/modifier ton profil</li>
            <li>Uploader ton CV</li>
            <li>Ajouter une description</li>
            <li>Voir ta wishlist</li>
            <li>Suivre tes candidatures</li>
        </ul>
        <a href="profil_etudiant.php" class="btn-continue">Accéder à mon profil</a>

    <?php elseif ($role === 'entreprise'): ?>
        <p>Tu es connecté en tant qu'<strong>entreprise</strong>.</p>
        <a href="profil_entreprise.php" class="btn-continue">Voir ton espace entreprise</a>
    <?php endif; ?>
</main>

<?php include('../includes/footer.php'); ?>
