<?php include 'includes/header.php'; ?>

<main class="main-content"> 
    <!-- Section de recherche -->
    <section class="search">
        <h1>1001 Offres de Stages</h1>
        <input type="text" placeholder="Trouvez votre stage dès maintenant...">
    </section>

    <!-- Section Alternance et Stage -->
    <section class="offers">
        <div class="offer-card">
            <h2>Alternance</h2>
            <p>Vous recherchez votre alternance à partir de septembre ? Découvrez nos offres.</p>
            <button>Je postule</button>
        </div>
        <div class="offer-card">
            <h2>Stage</h2>
            <p>Vous recherchez un stage ? Des centaines d'offres disponibles, postulez dès maintenant !</p>
            <button>Je postule</button>
        </div>
    </section>

    <!-- Section Match CV -->
    <section class="match-cv">
        <h2>Matchez votre CV</h2>
        <p>Découvrez les jobs qui vous correspondent en faisant matcher votre CV avec nos offres d'emploi !</p>
        <button>Importer mon CV</button>
    </section>

    <!-- Section Par Domaine -->
    <section class="domains">
        <h2>Par domaine :</h2>
        <div class="domain-list">
            <div class="domain-card">
                <img src="../assets/dev-icon.png" alt="Développement">
                <p>Développement</p>
            </div>
        <div class="domain-card">
            <img src="../assets/marketing-icon.png" alt="Marketing">
            <p>Marketing</p>
        </div>
        <div class="domain-card">
            <img src="../assets/design-icon.png" alt="Design">
            <p>Design</p>
        </div>
    </div>
    </section>

    <!-- Section Offres récentes -->
    <section class="recent-offers">
        <h2>Offres récentes</h2>
        <div class="offer-list">
            <div class="offer-item">
                <h3>Titre de l'offre</h3>
                <p>📅 2 mois</p>
                <p>📍 Lieu</p>
                <p>💼 TT Possible</p>
                <button>❤️</button>
            </div>
            <div class="offer-item">
                <h3>Titre de l'offre</h3>
                <p>📅 2 mois</p>
                <p>📍 Lieu</p>
                <p>💼 TT Possible</p>
                <button>❤️</button>
            </div>
        </div>
    </section>
</main>
<script src="../js/script.js"></script>

<?php include 'includes/footer.php'; ?>
