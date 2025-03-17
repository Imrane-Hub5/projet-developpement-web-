<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStage - Offres de Stages</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header>
    <div class="header-container">
        <div class="logo">
            <a href="/webtest/views/index.php">
                <img src="../assets/logo.png" alt="EasyStage Logo">
            </a>
        </div>

        <div class="header-icons">
            <a href="#"><img src="../assets/notif-icon.png" alt="Notifications"></a>
            <a href="#"><img src="../assets/profile-icon.png" alt="Profil"></a>
        </div>

            <!-- Icône du menu burger avec une image -->
        <div class="burger-menu" onclick="toggleMenu()">
        <img src="../assets/menu-burger.png" alt="Menu" id="burger-icon">
        </div>

    </div>


    <nav id="navbar">
            <a href="/webtest/views/index.php">Accueil</a>
            <a href="/webtest/views/offres.php">Offres</a>
            <a href="/webtest/views/utilisateurs/connexion.php">Connexion</a>
            <a href="/webtest/views/utilisateurs/inscription.php">Inscription</a>
    </nav>

</header>

<!-- Fenêtre modale -->
<div id="profileModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Suivre mes candidatures, enregistrer mon CV, programmer mes alertes...</p>
        <button class="btn-red">Créer mon profil</button>
        <hr>
        <p>De retour ?</p>
        <button class="btn-black">Me connecter</button>
    </div>
</div>
