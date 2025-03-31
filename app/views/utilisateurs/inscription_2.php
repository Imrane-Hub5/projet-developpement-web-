<?php include('../includes/header.php'); ?>

<main class="inscription-container">
  <form class="form-card" action="traitement_inscription.php" method="post" enctype="multipart/form-data">
    
    <h2 class="form-title">Étape 2 sur 2 : Tes préférences</h2>
    <p class="form-subtitle">Dis-nous tes attentes pour qu’on te propose les meilleures offres !</p>

    <div class="input-group">
      <label for="cv">Dépose ton CV (.pdf)</label>
      <input type="file" id="cv" name="cv" accept=".pdf" required>
    </div>

    <div class="input-group">
      <label for="ville">Ville</label>
      <input type="text" id="ville" name="ville" placeholder="Ex : Lille, Paris, Lyon..." required>
    </div>

    <div class="input-group">
      <label for="type">Type de stage</label>
      <select id="type" name="type" required>
        <option value="">-- Choisir un type --</option>
        <option value="Stage">Stage</option>
        <option value="Alternance">Alternance</option>
      </select>
    </div>

    <div class="input-group">
      <label for="duree">Durée souhaitée</label>
      <select id="duree" name="duree" required>
        <option value="">-- Sélectionne une durée --</option>
        <option value="1 mois">1 mois</option>
        <option value="2 mois">2 mois</option>
        <option value="3 mois">3 mois</option>
        <option value="4 mois ou plus">4 mois ou plus</option>
      </select>
    </div>

    <div class="input-group">
      <label for="mode">Préférence de travail</label>
      <select id="mode" name="mode" required>
        <option value="">-- Mode de travail --</option>
        <option value="Présentiel">Présentiel</option>
        <option value="Distanciel">Distanciel</option>
        <option value="Hybride">Hybride</option>
      </select>
    </div>

    <button type="submit" class="btn-continue">Finaliser l'inscription</button>
  </form>
</main>

<?php include('../includes/footer.php'); ?>
