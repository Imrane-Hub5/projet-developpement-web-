<?php include('includes/header.php'); ?> 

<body>

    <h2>Offres de Stage</h2>

    <!-- Barre de recherche -->
    <input type="text" id="searchInput" placeholder="Rechercher une offre..." onkeyup="filterOffers()">

    <!-- Filtres -->
    <select id="filterLieu">
        <option value="">Tous les lieux</option>
        <option value="Paris">Paris</option>
        <option value="Lille">Lille</option>
        <option value="Lyon">Lyon</option>
    </select>

    <select id="filterDuree">
        <option value="">Toutes les durées</option>
        <option value="1 mois">1 mois</option>
        <option value="6 mois">6 mois</option>
        <option value="12 mois">12 mois</option>
    </select>

    <button onclick="applyFilter()">Filtrer</button>

    <div id="offresContainer">
    <?php
    // Exemple d'un tableau de données des offres
    $offres = [
        ["nom" => "offre A", "durée" => "1 mois", "lieu" => "Paris", "ouitt" => "https://cdn-icons-png.flaticon.com/512/93/93624.png"],
        ["nom" => "offre B", "durée" => "12 mois", "lieu" => "Lille", "ouitt" => ""],
        ["nom" => "offre C", "durée" => "6 mois", "lieu" => "Lyon", "ouitt" => "https://cdn-icons-png.flaticon.com/512/93/93624.png"],
    ];

    foreach ($offres as $offre) {
        echo '<section class="entreprise" data-lieu="' . htmlspecialchars($offre["lieu"]) . '" data-duree="' . htmlspecialchars($offre["durée"]) . '">
                <h3>' . htmlspecialchars($offre["nom"]) . '</h3>
                <div class="info_public">
                    <span class="badge">' . htmlspecialchars($offre["durée"]) . '</span>
                    <p><img src="https://cdn-icons-png.flaticon.com/512/5219/5219383.png" width="20" height="20"/> ' . htmlspecialchars($offre["lieu"]) . '</p>';
        
        if (!empty($offre["ouitt"])) {
            echo '<p><img src="' . htmlspecialchars($offre["ouitt"]) . '" width="20" height="20"/></p>';
        }

        echo '</div>
                <div class="info_prive">
                    <button onclick="voirDetails()">Détail</button>
                </div>
            </section>';
    }
    ?>
    </div>

    <script>
        function voirDetails() {
            alert("Détails de l'offre à afficher ici !");
        }

        function filterOffers() {
            let searchValue = document.getElementById("searchInput").value.toLowerCase();
            let offers = document.querySelectorAll(".entreprise");

            offers.forEach(offer => {
                let title = offer.querySelector("h3").innerText.toLowerCase();
                offer.style.display = title.includes(searchValue) ? "block" : "none";
            });
        }

        function applyFilter() {
            let selectedLieu = document.getElementById("filterLieu").value;
            let selectedDuree = document.getElementById("filterDuree").value;
            let offers = document.querySelectorAll(".entreprise");

            offers.forEach(offer => {
                let lieu = offer.getAttribute("data-lieu");
                let duree = offer.getAttribute("data-duree");

                let lieuMatch = selectedLieu === "" || lieu === selectedLieu;
                let dureeMatch = selectedDuree === "" || duree === selectedDuree;

                offer.style.display = (lieuMatch && dureeMatch) ? "block" : "none";
            });
        }
    </script>

</body>
</html>
