<?php include('../includes/header.php'); ?>

<main class="inscription-page">
  <form class="inscription-form-container" action="inscription_2.php" method="post">
    
    <h2 class="form-title">Étape 1 sur 2 : Créer ton compte</h2>
    <p class="form-subtitle">Dis-nous qui tu es pour qu’on puisse t’accompagner au mieux 💡</p>

    <div class="input-group">
      <label for="email">Email ou téléphone</label>
      <input type="text" id="email" name="email" placeholder="prenom@mail.com ou 06xxxxxxx" required>
    </div>

    <div class="input-group">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" placeholder="Ex: Dupont" required>
    </div>

    <div class="input-group">
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" placeholder="Ex: Marie" required>
    </div>

    <div class="input-group">
      <label for="niveau">Niveau d’étude</label>
      <select id="niveau" name="niveau" required>
        <option value="">-- Sélectionne ton niveau --</option>
        <option>Préparation du brevet</option>
        <option>Lycée - Seconde</option>
        <option>Lycée - Première</option>
        <option>Lycée - Terminale</option>
        <option>Bac +1</option>
        <option>Bac +2</option>
        <option>Bac +3</option>
        <option>Bac +5</option>
        <option>Doctorat</option>
      </select>
    </div>

    <div class="input-group">
      <label for="domaine">Domaine d’intérêt</label>
      <select id="domaine" name="domaine" required>
        <option value="">-- Choisis un domaine --</option>
        <option>Développement</option>
        <option>Design</option>
        <option>Marketing</option>
        <option>Finance</option>
        <option>Événementiel</option>
        <option>Data / IA</option>
        <option>Cybersécurité</option>
        <option>Cloud</option>
        <option>Support Technique</option>
      </select>
    </div>

    <div class="input-group">
      <label for="date">Date de disponibilité</label>
      <input type="date" id="date" name="date" required>
    </div>

    <div class="input-group">
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" placeholder="8 caractères avec majuscule, chiffre..." required>
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="privacy" name="privacy" required>
      <label for="privacy">
        J'accepte les <a href="#">conditions d'utilisation</a> et la politique de confidentialité.
      </label>
    </div>

    <button type="submit" class="submit-btn">Continuer</button>
  </form>
</main>

<?php include('../includes/footer.php'); ?>
