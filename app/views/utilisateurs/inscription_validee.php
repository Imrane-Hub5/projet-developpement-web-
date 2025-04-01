<?php include('../includes/header.php'); ?>

<main class="inscription-container" style="text-align: center;">
    <?php
    $role = isset($_GET['role']) ? $_GET['role'] : 'candidat';

    if ($role === 'entreprise') {
        $message = "Votre compte entreprise a bien été créé 👏";
        $sousMessage = "Nous vous redirigeons vers votre espace pour publier vos offres.";
        $redirect = "../entreprises/entreprise.php";
    } else {
        $message = "Bienvenue sur EasyStage 🎓";
        $sousMessage = "Ton profil étudiant est prêt ! Tu vas pouvoir commencer à chercher ton stage.";
        $redirect = "profil_etudiant.php";
    }
    ?>
    
    <h2 class="form-title"><?= $message ?></h2>
    <p class="form-subtitle"><?= $sousMessage ?></p>

    <img src="../../public/assets/images/logo.png" alt="Logo" style="width: 80px; margin: 20px auto;">

    <p style="margin-top: 20px; color: #444;">Redirection automatique dans quelques secondes...</p>

    <div class="loader" style="margin: 30px auto;"></div>
</main>

<script>
// Redirection automatique après 4 secondes
setTimeout(() => {
    window.location.href = "<?= $redirect ?>";
}, 4000);
</script>

<style>
.loader {
    border: 6px solid #f3f3f3;
    border-top: 6px solid #00274D;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<?php include('../includes/footer.php'); ?>
    