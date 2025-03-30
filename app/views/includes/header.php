<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStage - Offres de Stages</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    </head>

<body>

<header>
    <div class="header-container">
        <div class="logo">
            <a href="/index.php">
                <img src="/public/assets/images/logo.png" alt="EasyStage Logo">
            </a>
        </div>

        <div class="header-icons">
            <a href="#"><img src="/public/assets/images/notif-icon.png" alt="Notifications"></a>
            <a href="#"><img src="/public/assets/images/profile-icon.png" alt="Profil"></a>
        </div>

            <!-- Icône du menu burger avec une image -->
        <div class="burger-menu" onclick="toggleMenu()">
        <img src="/public/assets/images/menu-burger.png" alt="Menu" id="burger-icon">
        </div>

    </div>


<nav id="navbar" class="mobile-menu">
    <a href="/index.php">Accueil</a>
    <a href="/app/views/offres.php">Offres</a>
    <a href="/app/views/utilisateurs/connexion.php">Connexion</a>
    <a href="/app/views/utilisateurs/inscription.php">Inscription</a>
</nav>


</header>



