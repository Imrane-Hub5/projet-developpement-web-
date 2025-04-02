

<?php include('../includes/header.php'); ?>

<main class="inscription-container">




    <form class="form-card" action="../../controllers/traitement_inscription.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
    <input type="hidden" id="role" name="role" value="">

   
    <h2 class="form-title">Créer ton compte</h2>
        <p class="form-subtitle">Choisis ton rôle pour personnaliser ton expérience ✨</p>

<!-- Étape 0 : Choix du rôle -->
<div id="step-role" class="step">
    <div class="role-selection-buttons" style="display: flex; justify-content: center; gap: 2rem; margin-top: 2rem;">
        <button type="button" id="btn-etudiant" class="role-btn">Je suis étudiant</button>
        <button type="button" id="btn-entreprise" class="role-btn">Je suis une entreprise</button>
    </div>
</div>

    

        <!-- Étape 1 : Infos de base -->
        <div id="step-1" class="step" style="display: none;">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="prenom@mail.com" required>
            </div>

            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Ton nom ou celui de l’entreprise" required>
            </div>

            <div id="prenom-group" class="input-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Ton prénom">
            </div>

            <div class="input-group">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" placeholder="06xxxxxxxx" required>
            </div>

            <div class="input-group">
                <label for="domaine">Domaine</label>
                <select id="domaine" name="domaine" required>
                    <option value="">-- Choisis ton domaine --</option>
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
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Majuscule, chiffre, 8 caractères min" required>
            </div>

            <div class="button-group">
                <button type="button" id="btn-next-1" class="btn-continue">Étape suivante</button>
            </div>
        </div>

        <!-- Étape 2 : Infos complémentaires -->
        <div id="step-2" class="step" style="display: none;">
            <div id="etudiant-extra">
                <div class="input-group">
                    <label for="niveau">Niveau d’étude</label>
                    <select id="niveau" name="niveau">
                        <option value="">-- Ton niveau d’étude --</option>
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
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" name="ville" placeholder="Ex: Lille">
                </div>

                <div class="input-group">
                    <label for="date">Date de dispo</label>
                    <input type="date" id="date" name="date">
                </div>

                <div class="input-group">
                    <label for="type">Type</label>
                    <select id="type" name="type">
                        <option value="">-- Stage ou alternance --</option>
                        <option>Stage</option>
                        <option>Alternance</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="duree">Durée</label>
                    <select id="duree" name="duree">
                        <option value="">-- Durée souhaitée --</option>
                        <option>1 mois</option>
                        <option>2 mois</option>
                        <option>3 mois</option>
                        <option>4 mois ou +</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="mode">Mode</label>
                    <select id="mode" name="mode">
                        <option value="">-- Présentiel ou distanciel --</option>
                        <option>Présentiel</option>
                        <option>Distanciel</option>
                        <option>Hybride</option>
                    </select>
                </div>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="privacy" name="privacy" required>
                <label for="privacy">
                    J’accepte les <a href="#">conditions d’utilisation</a> et la politique de confidentialité.
                </label>
            </div>

            <div class="button-group">
                <button type="button" id="btn-back" class="btn-back">Retour</button>
                <button type="submit" class="btn-continue">Créer mon compte</button>
            </div>
        </div>
    </form>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const btnEtudiant = document.getElementById("btn-etudiant");
    const btnEntreprise = document.getElementById("btn-entreprise");
    const stepRole = document.getElementById("step-role");
    const step1 = document.getElementById("step-1");
    const step2 = document.getElementById("step-2");
    const btnNext1 = document.getElementById("btn-next-1");
    const btnBack = document.getElementById("btn-back");
    const etudiantExtra = document.getElementById("etudiant-extra");
    const prenomGroup = document.getElementById("prenom-group");
    const roleInput = document.getElementById("role");

    btnEtudiant.addEventListener("click", () => {
        roleInput.value = "candidat";
        prenomGroup.style.display = "block";
        etudiantExtra.style.display = "block";
        stepRole.style.display = "none";
        step1.style.display = "block";
    });

    btnEntreprise.addEventListener("click", () => {
        roleInput.value = "entreprise";
        prenomGroup.style.display = "none";
        etudiantExtra.style.display = "none";
        stepRole.style.display = "none";
        step1.style.display = "block";
    });

    btnNext1.addEventListener("click", () => {
    const email = document.getElementById("email").value.trim();
    const nom = document.getElementById("nom").value.trim();
    const telephone = document.getElementById("telephone").value.trim();
    const mdp = document.getElementById("password").value;
    const domaine = document.getElementById("domaine").value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mdpRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    const phoneRegex = /^0[67]\d{8}$/;

    if (!email || !emailRegex.test(email)) {
        alert("Merci de saisir un email valide.");
        return;
    }
    if (!nom) {
        alert("Merci de saisir ton nom.");
        return;
    }
    if (!telephone || !phoneRegex.test(telephone)) {
        alert("Merci de saisir un numéro de téléphone valide (ex: 06xxxxxxx).");
        return;
    }
    if (!domaine) {
        alert("Merci de sélectionner un domaine.");
        return;
    }
    if (!mdp || !mdpRegex.test(mdp)) {
        alert("Le mot de passe doit contenir au moins 8 caractères, une majuscule et un chiffre.");
        return;
    }

    // Si tout est ok ➡ on passe à l'étape suivante
    step1.style.display = "none";
    step2.style.display = "block";
});


    btnBack.addEventListener("click", () => {
        step2.style.display = "none";
        step1.style.display = "block";
    });
});

// Fonction de validation
function validateForm() {
    const email = document.getElementById("email").value.trim();
    const nom = document.getElementById("nom").value.trim();
    const telephone = document.getElementById("telephone").value.trim();
    const mdp = document.getElementById("password").value;
    const role = document.getElementById("role").value;

    if (!email || !nom || !telephone || !mdp || !role) {
        alert("Merci de remplir tous les champs obligatoires.");
        return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Email invalide.");
        return false;
    }

    const mdpRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (!mdpRegex.test(mdp)) {
        alert("Mot de passe invalide : au moins 8 caractères, une majuscule, un chiffre.");
        return false;
    }

    if (role === "candidat") {
        const niveau = document.getElementById("niveau").value;
        const ville = document.getElementById("ville").value.trim();
        const date = document.getElementById("date").value;
        const type = document.getElementById("type").value;
        const duree = document.getElementById("duree").value;
        const mode = document.getElementById("mode").value;

        if (!niveau || !ville || !date || !type || !duree || !mode) {
            alert("Merci de compléter tous les champs étudiants.");
            return false;
        }
    }

     // Si étudiant, valider les champs spécifiques à l’étape 2
     if (role === "candidat") {
        const niveau = document.getElementById("niveau").value;
        const ville = document.getElementById("ville").value.trim();
        const date = document.getElementById("date").value;
        const type = document.getElementById("type").value;
        const duree = document.getElementById("duree").value;
        const mode = document.getElementById("mode").value;
        const privacy = document.getElementById("privacy").checked;

        if (!niveau || !ville || !date || !type || !duree || !mode || !privacy) {
            alert("Merci de compléter tous les champs de l'étape 2 et de cocher les conditions d’utilisation.");
            return false;
        }
    }


    return true;
}
</script>


<?php include('../includes/footer.php'); ?>
