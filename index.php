<?php include 'app/views/includes/header.php'; ?>

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


  <!-- Intro Domaine -->
<section class="domain-intro">
  <h2>Découvre tous les domaines sur EasyStage</h2>
  <p>Peu importe ton profil ou ton projet, EasyStage regroupe une grande diversité de domaines pour t’aider à trouver la mission qui te correspond vraiment.</p>
</section>

<!-- Section Par Domaine -->
<section class="domains">
  <div class="domain-header">
    <h2>Explore les domaines disponibles</h2>
    <p>Découvre tous les domaines dans lesquels tu peux postuler sur EasyStage</p>
  </div>
  <div class="domain-scroll-container">
    <button class="scroll-btn left">&lt;</button>
    <div class="domain-list">
      <div class="domain-card">Développement</div>
      <div class="domain-card">Marketing</div>
      <div class="domain-card">Design</div>
      <div class="domain-card">Ressources Humaines</div>
      <div class="domain-card">Finance</div>
      <div class="domain-card">Data / IA</div>
      <div class="domain-card">Communication</div>
      <div class="domain-card">Product Design</div>
      <div class="domain-card">CyberSécurité</div>
      <div class="domain-card">UX/UI</div>
      <div class="domain-card">IT</div>
      <div class="domain-card">Support Technique</div>
      <div class="domain-card">Gestion de projet</div>
      <div class="domain-card">Événementiel</div>
      <div class="domain-card">Commerce</div>
      <div class="domain-card">Stratégie</div>
    </div>
    <button class="scroll-btn right">&gt;</button>
  </div>
</section>


  <!-- Offres récentes -->
  <section class="recent-offers">
  <h2>Nos offres</h2>
<!-- à remplacer plus tard par php bdd  -->
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

<div class="offer-item">
  <span class="tag">Data / IA</span>
  <h3>Data Analyst Junior</h3>
  <p class="info">5 mois - Toulouse - Télétravail complet</p>
  <button class="favorite-btn">+</button>
</div>

<div class="offer-item">
  <span class="tag">Finance</span>
  <h3>Assistant Comptable</h3>
  <p class="info">2 mois - Marseille - Présentiel</p>
  <button class="favorite-btn">+</button>
</div>

<div class="offer-item">
  <span class="tag">Gestion de projet</span>
  <h3>Assistant Chef de Projet</h3>
  <p class="info">6 mois - Nantes - Hybride</p>
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



</main>

<?php include 'app/views/includes/footer.php'; ?>
