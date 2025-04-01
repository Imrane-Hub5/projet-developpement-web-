
<?php include('includes/header.php'); ?>
<?php include('app\controllers\OffreController.php'); ?>

<body>

    <h1>Offres de Stage</h>
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

</body>
</html>