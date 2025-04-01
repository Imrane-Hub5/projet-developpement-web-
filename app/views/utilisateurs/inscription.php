<?php include('../includes/header.php'); ?>

<main class="inscription-container">
    <form class="form-card" action="traitement_inscription.php" method="post" enctype="multipart/form-data">
        <h2 class="form-title">Créer ton compte</h2>
        <p class="form-subtitle">Dis-nous qui tu es pour personnaliser ton expérience 🧭</p>

       
        <div class="role-selection-buttons">
            <button type="button" id="btn-candidat" class="role-btn">Je suis étudiant</button>
            <button type="button" id="btn-entreprise" class="role-btn">Je suis une entreprise</button>
        </div>

        <input type="hidden" name="role" id="roleInput">

        <!-- Formulaire ÉTUDIANT -->
        <div id="form-candidat" class="form-section" style="display: none;">
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
                <label for="ville">Ville</label>
                <input type="text" id="ville" name="ville" placeholder="Ex : Lille, Paris, Lyon..." required>
            </div>

            <div class="input-group">
                <label for="date">Date de disponibilité</label>
                <input type="date" id="date" name="date" required>
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

            <div class="input-group">
                <label for="cv">Dépose ton CV (PDF)</label>
                <input type="file" id="cv" name="cv" accept=".pdf" required>
            </div>
        </div>

        <!-- Formulaire ENTREPRISE -->
        <div id="form-entreprise" class="form-section" style="display: none;">
            <div class="input-group">
                <label for="email_entreprise">Email</label>
                <input type="email" id="email_entreprise" name="email" placeholder="entreprise@mail.com" required>
            </div>

            <div class="input-group">
                <label for="nom_entreprise">Nom de l’entreprise</label>
                <input type="text" id="nom_entreprise" name="nom" placeholder="Nom de l'entreprise" required>
            </div>

            <div class="input-group">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" placeholder="06xxxxxxxx" required>
            </div>

            <div class="input-group">
                <label for="domaine_entreprise">Secteur d’activité</label>
                <select id="domaine_entreprise" name="domaine" required>
                    <option value="">-- Sélectionne un domaine --</option>
                    <option>Développement</option>
                    <option>Marketing</option>
                    <option>Design</option>
                    <option>RH</option>
                    <option>Événementiel</option>
                    <option>Data</option>
                    <option>Cloud</option>
                    <option>Cybersécurité</option>
                </select>
            </div>

            <div class="input-group">
                <label for="password_entreprise">Mot de passe</label>
                <input type="password" id="password_entreprise" name="password" required>
            </div>
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">
                J'accepte les <a href="#">conditions d'utilisation</a> et la politique de confidentialité.
            </label>
        </div>

        <button type="submit" class="btn-continue">Créer mon compte</button>
    </form>
</main>


<!-- code js pour inscription  -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const btnCandidat = document.getElementById("btn-candidat");
    const btnEntreprise = document.getElementById("btn-entreprise");
    const formCandidat = document.getElementById("form-candidat");
    const formEntreprise = document.getElementById("form-entreprise");
    const roleInput = document.getElementById("roleInput");
    const roleSection = document.querySelector(".role-selection-buttons");

    btnCandidat.addEventListener("click", function () {
        roleSection.style.display = "none";
        roleInput.value = "candidat";
        formCandidat.style.display = "block";
    });

    btnEntreprise.addEventListener("click", function () {
        roleSection.style.display = "none";
        roleInput.value = "entreprise";
        formEntreprise.style.display = "block";
    });
});
</script>


<?php include('../includes/footer.php'); ?>

