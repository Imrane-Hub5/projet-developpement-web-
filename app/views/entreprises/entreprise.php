<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres de Stage</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
    <script defer src="/assets/js/script.js"></script>
</head>
<body>
    <header>
        <h1>Offres de Stage</h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="offres.html">Offres de Stage</a></li>
                <li><a href="entreprise.html">Entreprises</a></li>
                <li><a href="connexion.html">Connexion</a></li>
                <li><a href="profil-etudiant.html">Profil</a></li>
            </ul>
        </nav>
    </header>

    <section id="entreprise">
        <h2>Nom de l'entreprise</h2>
        <div class="info_public">
            <h3>Informations publiques</h3>
            <p><img src="https://cdn-icons-png.flaticon.com/512/16207/16207218.png" width="20" height="20"/> Secteur d'activité</p>
            <p><img src="https://cdn-icons-png.flaticon.com/512/8386/8386432.png" width="20" height="20"/> Description de l'entreprise</p>
            <p><img src="https://cdn-icons-png.flaticon.com/512/8056/8056414.png" width="20" height="20"/> Email</p>
            <p><img src="https://cdn-icons-png.flaticon.com/512/5219/5219383.png" width="20" height="20"/> Paris</p>
        </div>
        <div class="info_prive">
            <h3>Informations privées</h3>
            <button onclick="lesstagespublier()">Les stages publiés</button>
            <button onclick="candidature()">Candidature</button>
            <button onclick="stagiaire()">Stagiaire</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Plateforme de Stage - Tous droits réservés</p>
    </footer>
</body>
</html>
