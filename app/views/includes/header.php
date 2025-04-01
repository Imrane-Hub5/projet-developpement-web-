<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cookiePopup = document.getElementById("cookiePopup");
        const acceptBtn = document.getElementById("acceptCookies");
        const body = document.body;

        // Vérifie si l'utilisateur a déjà accepté les cookies
        if (!localStorage.getItem("cookiesAccepted")) {
            setTimeout(() => {
                cookiePopup.classList.add("show");
                body.classList.add("blur-background"); // Active le flou en arrière-plan
            }, 2000); // Apparition après 2 secondes
        }

        // Gestion du clic sur "Accepter"
        acceptBtn.addEventListener("click", function () {
            localStorage.setItem("cookiesAccepted", "true");
            
            // Ajoute une transition de disparition
            cookiePopup.style.opacity = "0";
            setTimeout(() => {
                cookiePopup.style.display = "none"; 
                body.classList.remove("blur-background"); // Retire le flou de l'arrière-plan
            }, 500); // Disparition fluide
        });
    });
    </script>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStage - Offres de Stages</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    </head>

<body class="dark-mode">
    <div class="cookie-popup" id="cookiePopup">
    <p>🍪 Ce site utilise des cookies pour améliorer votre expérience. En continuant, vous acceptez notre 
       <a href="politique-cookies.php">politique de cookies</a>.
    </p>
    <button id="acceptCookies">Accepter</button>
    </div>


</body>





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



