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

<<<<<<< Updated upstream
=======
<?php
require_once __DIR__ . '/app/models/OffreModel.php';
$offreModel = new OffreModel(); // ligne 11 ici
$offres = $offreModel->getAllOffres();
?>



>>>>>>> Stashed changes
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

  <!-- Offres récentes -->
  <section class="recent-offers">
<<<<<<< Updated upstream
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
=======
  <h2>Nos offres</h2>
<!-- à remplacer plus tard par php bdd  -->
<div class="offer-list">

  <?php foreach ($offres as $offre): ?>
    <div class="offer-item">
      <span class="tag"><?= htmlspecialchars($offre['domaine']) ?></span>
      <h3><?= htmlspecialchars($offre['titre']) ?></h3>
      
      <p class="info">
  <?= htmlspecialchars($offre['duree']) ?> mois - 
  <?= isset($offre['ville']) ? htmlspecialchars($offre['ville']) : 'Lieu non précisé' ?> - 
  <?= htmlspecialchars($offre['mode']) ?>
</p>

      <button class="favorite-btn">+</button>
    </div>
  <?php endforeach; ?>
</div>

>>>>>>> Stashed changes
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
// Fonction pour afficher le popup avec animation
function showCookiePopup() {
  const cookiePopup = document.querySelector('.cookie-popup');
  cookiePopup.classList.remove('hide'); // Afficher le popup
  
  // Animation d'apparition avec un effet de rebond
  setTimeout(() => {
    cookiePopup.style.opacity = 1;
    cookiePopup.style.transform = 'translateY(0)';
    cookiePopup.classList.add('popup-rebound'); // Ajouter une animation de rebond
  }, 100);
}

// Fonction pour cacher le popup avec animation quand le bouton est cliqué
function acceptCookies() {
  const cookiePopup = document.querySelector('.cookie-popup');
  cookiePopup.style.opacity = 0;
  cookiePopup.style.transform = 'translateY(20px)'; // Animation de disparition

  // Appliquer une animation de rotation avant la disparition
  cookiePopup.classList.add('popup-rotate');

  // Cacher après l'animation
  setTimeout(() => {
    cookiePopup.classList.add('hide');
  }, 500); // Temps de la transition (500ms)
  
  // Enregistrer l'acceptation dans le localStorage pour ne pas afficher le popup à nouveau
  localStorage.setItem('cookieAccepted', 'true');
}

// Attacher l'événement au bouton "Accepter"
document.querySelector('.cookie-popup button').addEventListener('click', acceptCookies);

// Vérifier si les cookies ont déjà été acceptés au chargement de la page
window.addEventListener('load', () => {
  showCookiePopup();
});



  
</script>

<?php include 'app/views/includes/footer.php'; ?>
