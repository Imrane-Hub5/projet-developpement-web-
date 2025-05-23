<?php 
include 'app/views/includes/header.php';

// Vérifie si le cookie existe pour ne pas afficher le popup
$showCookiePopup = !isset($_COOKIE["cookiesAccepted"]);

if ($_SERVER['REQUEST_URI'] == '/set-cookie' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie("cookiesAccepted", "true", time() + 31536000, "/"); // Expire dans 1 an
    echo json_encode(["status" => "success"]);
    exit;
}
?>

<main class="main-content">

  <!-- Hero Section -->
  <section class="hero">
    <h1>Construis ton avenir avec EasyStage</h1>
    <p>Découvre les opportunités de stages et d’alternance qui te correspondent. Construit ton expérience professionnelle dès aujourd’hui.</p>
  </section>

  <!-- Split Section 1 -->
  <section class="split-section">
    <img src="/public/assets/images/hero-students.jpg" alt="Étudiants heureux">
    <div class="split-text">
      <h2>Une alternance qui te ressemble</h2>
      <p>Tu cherches une alternance à partir de septembre ? EasyStage te guide vers les offres adaptées à ton profil.</p>
      <button class="btn">Voir les offres</button>
    </div>
  </section>

  <!-- Split Section 2 (reverse) -->
  <section class="split-section reverse">
    <img src="/public/assets/images/teamwork.png" alt="Travail en équipe">
    <div class="split-text">
      <h2>Stage de rêve ? Il est ici</h2>
      <p>Des centaines d’offres de stage disponibles. Postule dès maintenant et démarre ton aventure professionnelle.</p>
      <button class="btn">Explorer les stages</button>
    </div>
  </section>

  <!-- Offres récentes =================
   ====================================
   ===================================
   ===================================
   a vhanger mettre de la bdd=========
   ================================
   -->
  <section class="recent-offers">
    <h2>Nos offres</h2>
    <div class="offer-list">
      <div class="offer-item">
        <span class="tag">Développement</span>
        <h3>Développeur Web</h3>
        <p class="info">3 mois - Lille - Télétravail partiel</p>
        <button class="favorite-btn">+</button>
      </div>
      <div class="offer-item">
        <span class="tag">Marketing</span>
        <h3>Chargé(e) de Communication</h3>
        <p class="info">6 mois - Paris - Présentiel</p>
        <button class="favorite-btn">+</button>
      </div>
      <div class="offer-item">
        <span class="tag">Design</span>
        <h3>UI/UX Designer</h3>
        <p class="info">4 mois - Lyon - Hybride</p>
        <button class="favorite-btn">+</button>
      </div>
    </div>
  </section>

  <!-- Section Match CV -->
  <section class="cv-match-card">
    <h2>Matchez votre CV</h2>
    <p>Importe ton CV et découvre les offres qui te correspondent le mieux. Ton avenir pro commence ici.</p>
    <button>Importer mon CV</button>
  </section>

  <!-- Popup Cookie -->
  <?php if ($showCookiePopup): ?>
  <div class="cookie-popup" id="cookiePopup">
    <p>🍪 Ce site utilise des cookies pour améliorer votre expérience. 
        <a href="politique-cookies.php">En savoir plus</a> .
    </p>
    <button id="acceptCookies">Accepter</button>
  </div>
  <?php endif; ?>

</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const cookiePopup = document.getElementById("cookiePopup");
  const acceptButton = document.getElementById("acceptCookies");

  // Si le cookie est déjà accepté, ne pas afficher le popup
  if (document.cookie.indexOf("cookiesAccepted=true") === -1) {
    setTimeout(() => {
      showCookiePopup();
    }, 500); // Délai pour une meilleure transition
  }

  // Fonction pour afficher le popup avec animation
  function showCookiePopup() {
    cookiePopup.classList.remove("hide"); // Assure que le popup est visible
    cookiePopup.classList.add("show"); // Applique les styles pour afficher le popup
    cookiePopup.classList.add("popup-slide"); // Ajoute l'animation
  }

  // Fonction pour accepter les cookies
  function acceptCookies() {
    // Cacher le popup après l'acceptation
    cookiePopup.classList.remove("show");
    cookiePopup.classList.add("hide");

    // Définir le cookie pour que le popup ne s'affiche plus
    document.cookie = "cookiesAccepted=true; max-age=31536000; path=/"; // Cookie valide pendant 1 an
  }

  // Attacher l'événement au bouton "Accepter"
  acceptButton.addEventListener("click", acceptCookies);
});

</script>

<?php include 'app/views/includes/footer.php'; ?>
