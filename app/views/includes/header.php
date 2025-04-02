
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStage - Offres de Stages</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    </head>

<body class="dark-mode">




<header>
    <div class="header-container">
        <div class="logo">
            <a href="/index.php">
                <img src="/public/assets/images/logo.png" alt="EasyStage Logo">
            </a>
        </div>


        <div class="header-icons">
    <!-- Notification (inchangé pour le moment) -->
    <a href="#"><img src="/public/assets/images/notif-icon.png" alt="Notifications"></a>

    <!-- Icône de profil cliquable -->
    <div class="profile-container">
        <img src="/public/assets/images/profile-icon.png" alt="Profil" onclick="toggleProfileMenu()">

        <!-- Menu contextuel selon l'état de connexion -->
        <div class="profile-menu" id="profileMenu" style="display: none;">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/app/views/utilisateurs/<?= $_SESSION['role'] === 'candidat' ? 'profil_etudiant.php' : 'profil_entreprise.php' ?>">Mon Profil</a>
                <a href="/app/controllers/logout.php">Déconnexion</a>
            <?php else: ?>
                <a href="/app/views/utilisateurs/connexion.php">Se connecter</a>
            <?php endif; ?>
        </div>
    </div>
</div>

            <!-- Icône du menu burger avec une image -->
        <div class="burger-menu" onclick="toggleMenu()">
        <img src="/public/assets/images/menu-burger.png" alt="Menu" id="burger-icon">
        </div>

    </div>


    <nav id="navbar" class="mobile-menu">
    <a href="/index.php">Accueil</a>
    <a href="/app/views/offres.php">Offres</a>

    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="/app/views/utilisateurs/connexion.php">Connexion</a>
        <a href="/app/views/utilisateurs/inscription.php">Inscription</a>
    <?php else: ?>
        <?php if ($_SESSION['role'] === 'candidat'): ?>
            <a href="/app/views/utilisateurs/profil_etudiant.php">Mon Profil</a>
        <?php elseif ($_SESSION['role'] === 'entreprise'): ?>
            <a href="/app/views/utilisateurs/profil_entreprise.php">Espace Entreprise</a>
        <?php endif; ?>
        <a href="/app/controllers/logout.php">Déconnexion</a>
    <?php endif; ?>
</nav>


</header>

<style>
.profile-container {
    position: relative;
    display: inline-block;
}

.profile-menu {
    position: absolute;
    top: 40px;
    right: 0;
    background-color: #fff;
    color: #333;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    min-width: 160px;
    z-index: 1000;
}

.profile-menu a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.2s;
}

.profile-menu a:hover {
    background-color: #f0f0f0;
}

</style>

<script>
function toggleProfileMenu() {
    const menu = document.getElementById('profileMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

// Clic en dehors pour fermer le menu
document.addEventListener('click', function (e) {
    const profileMenu = document.getElementById('profileMenu');
    const profileIcon = document.querySelector('.profile-container img');

    if (!profileMenu.contains(e.target) && e.target !== profileIcon) {
        profileMenu.style.display = 'none';
    }
});
</script>