<?php include('includes/header.php'); ?> 

<body>

    <h2>Offres de Stage</h2>

    <!-- Barre de recherche -->
    <input type="text" id="searchInput" placeholder="Rechercher une offre..." onkeyup="filterOffers()">

    <!-- Filtrage par ville -->
    <input type="text" id="filterLieu" placeholder="Filtrer par ville...">

    <!-- Curseur pour la durée -->
    <label for="filterDuree">Durée (mois) :</label>
    <input type="range" id="filterDuree" min="1" max="24" step="1" value="12" oninput="updateDureeValue()">
    <span id="dureeValue">12 mois</span>

    <button onclick="applyFilter()">Filtrer</button>

    <div id="offresContainer">
    <?php
    // Exemple d'un tableau de données des offres
    $offres = [
        ["nom" => "offre A", "durée" => "1", "lieu" => "Paris", "ouitt" => "https://cdn-icons-png.flaticon.com/512/93/93624.png"],
        ["nom" => "offre B", "durée" => "12", "lieu" => "Lille", "ouitt" => ""],
        ["nom" => "offre C", "durée" => "6", "lieu" => "Lyon", "ouitt" => "https://cdn-icons-png.flaticon.com/512/93/93624.png"],
        ["nom" => "offre D", "durée" => "18", "lieu" => "Marseille", "ouitt" => ""],
    ];

    foreach ($offres as $offre) {
        echo '<section class="entreprise" data-lieu="' . htmlspecialchars($offre["lieu"]) . '" data-duree="' . htmlspecialchars($offre["durée"]) . '">
                <h3>' . htmlspecialchars($offre["nom"]) . '</h3>
                <div class="info_public">
                    <span class="badge">' . htmlspecialchars($offre["durée"]) . ' mois</span>
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
            let filterLieu = document.getElementById("filterLieu").value.toLowerCase();
            let filterDuree = document.getElementById("filterDuree").value;
            let offers = document.querySelectorAll(".entreprise");

            offers.forEach(offer => {
                let lieu = offer.getAttribute("data-lieu").toLowerCase();
                let duree = parseInt(offer.getAttribute("data-duree"));

                let lieuMatch = filterLieu === "" || lieu.includes(filterLieu);
                let dureeMatch = duree <= filterDuree;

                offer.style.display = (lieuMatch && dureeMatch) ? "block" : "none";
            });
        }

        function updateDureeValue() {
            let duree = document.getElementById("filterDuree").value;
            document.getElementById("dureeValue").innerText = duree + " mois";
        }
    </script>

</body>
</html>
