<?php include 'app/views/includes/header.php'; ?>

<main class="main-content">

  <!-- Hero Section -->
  <section class="hero">
    <h1>Construis ton avenir avec EasyStage</h1>
    <p>Découvre les opportunités de stages et d’alternance qui te correspondent. Construit ton expérience professionnelle dès aujourd’hui.</p>
  </section>

  <!-- Split Section 1 -->
  <section class="split-section">
    <img src="/public/assets/images/hero-students.png" alt="Étudiants heureux">
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

  <!-- Section Match CV -->
  <section class="split-section">
    <img src="/public/assets/images/cv-match.png" alt="CV Match">
    <div class="split-text">
      <h2>Matchez votre CV</h2>
      <p>Importe ton CV et découvre les offres qui te correspondent le mieux. Ton avenir pro commence ici.</p>
      <button class="btn">Importer mon CV</button>
    </div>
  </section>

  <!-- Section Par Domaine -->
  <section class="domains">
    <h2 style="text-align:center; margin-bottom: 30px;">Par domaine</h2>
    <div class="domain-list">
      <div class="domain-card">
        <img src="/public/assets/images/dev-icon.png" alt="Développement">
        <p>Développement</p>
      </div>
      <div class="domain-card">
        <img src="/public/assets/images/marketing-icon.png" alt="Marketing">
        <p>Marketing</p>
      </div>
      <div class="domain-card">
        <img src="/public/assets/images/design-icon.png" alt="Design">
        <p>Design</p>
      </div>
    </div>
  </section>

  <!-- Offres récentes -->
  <section class="recent-offers">
    <h2 style="text-align:center; margin-bottom: 30px;">Offres récentes</h2>
    <div class="offer-list">
      <div class="offer-item">
        <h3>Développeur Web</h3>
        <p>📅 3 mois</p>
        <p>📍 Lille</p>
        <p>💼 Télétravail partiel</p>
        <button>❤️</button>
      </div>
      <div class="offer-item">
        <h3>Chargé Marketing</h3>
        <p>📅 6 mois</p>
        <p>📍 Paris</p>
        <p>💼 Présentiel</p>
        <button>❤️</button>
      </div>
    </div>
  </section>

</main>

<?php include 'app/views/includes/footer.php'; ?>
