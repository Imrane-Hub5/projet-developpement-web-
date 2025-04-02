<?php include('includes/header.php'); ?> 

<body>
    <h2>Offres de Stage</h2>

    <div id="poda">
      <div class="glow"></div>
      <div class="darkBorderBg"></div>
      <div class="darkBorderBg"></div>
      <div class="darkBorderBg"></div>
      <div class="white"></div>
      <div class="border"></div>
      <div id="main">
        <input id="searchInput" placeholder="Rechercher une offre..." type="text" name="text" class="input" onkeyup="filterOffers()"/>
        <div id="input-mask"></div>
        <div id="pink-mask"></div>
        <div class="filterBorder"></div>
        <div id="filter-icon" onclick="openFilterPopup()">
          <img src="https://creazilla-store.fra1.digitaloceanspaces.com/icons/3208979/filter-icon-md.png" alt="Filtrer" width="30" height="30">
        </div>
        <div id="search-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke-linejoin="round"
            stroke-linecap="round"
            height="54"
            fill="none"
            class="feather feather-search"
          >
            <circle stroke="url(#search)" r="8" cy="11" cx="11"></circle>
            <line
              stroke="url(#searchl)"
              y2="16.65"
              y1="22"
              x2="16.65"
              x1="22"
            ></line>
            <defs>
              <linearGradient gradientTransform="rotate(50)" id="search">
                <stop stop-color="#f8e7f8" offset="0%"></stop>
                <stop stop-color="#b6a9b7" offset="50%"></stop>
              </linearGradient>
              <linearGradient id="searchl">
                <stop stop-color="#b6a9b7" offset="0%"></stop>
                <stop stop-color="#837484" offset="50%"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>

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

</body>

    <div id="offresContainer">
    <?php
    $offres = [
        ["nom" => "offre A", "duree" => "1", "lieu" => "Paris"],
        ["nom" => "offre B", "duree" => "12", "lieu" => "Lille"],
        ["nom" => "offre C", "duree" => "6", "lieu" => "Lyon"],
        ["nom" => "offre D", "duree" => "18", "lieu" => "Marseille"],
    ];

    foreach ($offres as $offre) {
        echo '<section class="entreprise" data-lieu="' . htmlspecialchars($offre["lieu"]) . '" data-duree="' . htmlspecialchars($offre["duree"]) . '">
                <h3>' . htmlspecialchars($offre["nom"]) . '</h3>
                <div class="info_public">
                    <span class="badge">' . htmlspecialchars($offre["duree"]) . ' mois</span>
                    <p>' . htmlspecialchars($offre["lieu"]) . '</p>
                </div>
            </section>';
    }
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

  
</>
</html>
