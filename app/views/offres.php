<?php include('includes/header.php'); ?> 

<body>
    <h2>Offres de Stage</h2>

    <!-- Barre de recherche -->
    <input type="text" id="searchInput" placeholder="Rechercher une offre..." onkeyup="filterOffers()">
    <button onclick="openFilterPopup()">
        <img src="https://creazilla-store.fra1.digitaloceanspaces.com/icons/3208979/filter-icon-md.png" alt="Filtrer" width="30" height="30">
    </button>

    <!-- Pop-up de filtrage -->
    <div id="filterPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeFilterPopup()">&times;</span>
            <h3>Filtres</h3>
            <input type="text" id="filterLieu" placeholder="Filtrer par ville...">
            <label for="filterDuree">Durée (mois) :</label>
            <input type="range" id="filterDuree" min="1" max="24" step="1" value="12" oninput="updateDureeValue()">
            <span id="dureeValue">12 mois</span>
            <button onclick="applyFilter()">Appliquer</button>
        </div>
    </div>

    <div id="offresContainer">

    <!-- ==============================
     =================PAGINATION=======
     ================================== -->
    <?php
// Toutes les offres simulées (comme ton collègue les a mises)
$offres = [
    ["nom" => "offre A", "duree" => "1", "lieu" => "Paris"],
    ["nom" => "offre B", "duree" => "12", "lieu" => "Lille"],
    ["nom" => "offre C", "duree" => "6", "lieu" => "Lyon"],
    ["nom" => "offre D", "duree" => "18", "lieu" => "Marseille"],
    ["nom" => "offre E", "duree" => "3", "lieu" => "Nice"],
    ["nom" => "offre F", "duree" => "8", "lieu" => "Toulouse"],
];

// Pagination
$offresParPage = 2;
$totalOffres = count($offres);
$totalPages = ceil($totalOffres / $offresParPage);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, min($page, $totalPages)); // sécurise la page
$debut = ($page - 1) * $offresParPage;

// Découpe le tableau pour afficher seulement ce qu’il faut
$offresAffichees = array_slice($offres, $debut, $offresParPage);

// Affichage
foreach ($offresAffichees as $offre) {
    echo '<section class="entreprise" data-lieu="' . htmlspecialchars($offre["lieu"]) . '" data-duree="' . htmlspecialchars($offre["duree"]) . '">
            <h3>' . htmlspecialchars($offre["nom"]) . '</h3>
            <div class="info_public">
                <span class="badge">' . htmlspecialchars($offre["duree"]) . ' mois</span>
                <p>' . htmlspecialchars($offre["lieu"]) . '</p>
            </div>
        </section>';
}

// Affichage de la pagination
echo '<div class="pagination" style="text-align:center; margin-top: 20px;">';
for ($i = 1; $i <= $totalPages; $i++) {
    $active = ($i == $page) ? "style='font-weight:bold; background-color:#2c3e50; color:white; padding:6px 12px; border-radius:5px;'" : "";
    echo "<a href='offres.php?page=$i' $active>$i</a> ";
}
echo '</div>';
?>

    </div>

    <script>
        function openFilterPopup() {
            document.getElementById("filterPopup").style.display = "block";
        }

        function closeFilterPopup() {
            document.getElementById("filterPopup").style.display = "none";
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

            closeFilterPopup();
        }

        function updateDureeValue() {
            let duree = document.getElementById("filterDuree").value;
            document.getElementById("dureeValue").innerText = duree + " mois";
        }
    </script>

    <style>
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .popup-content {
            text-align: center;
        }
        .close {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }


        /* CSS PAGINATION */

        .pagination {
    text-align: center;
    margin-top: 20px;
}
.pagination a {
    margin: 0 5px;
    padding: 8px 12px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}
.pagination a.active {
    background-color: #2c3e50;
    font-weight: bold;
}
.pagination a:hover {
    background-color: #2980b9;
}

    </style>
</body>
</html>


<?php include('includes/footer.php'); ?>
