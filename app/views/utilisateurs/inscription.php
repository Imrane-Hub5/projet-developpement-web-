<?php include('../includes/header.php'); ?>

<main class="inscription-container">
    <h2>S'INSCRIRE</h2>
    <p class="subtitle">Inscris-toi pour accéder aux offres de stage qui te correspondent</p>

    <form class="inscription-form" action="#" method="post">
        <div class="input-group">
            <label for="email">Numéro de téléphone ou email</label>
            <input type="text" id="email" name="email" placeholder="Numéro de téléphone ou email" required>
        </div>
        <div class="input-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom" required>
        </div>
        <div class="input-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
        </div>
        <div class="input-group">
            <label for="age">Âge</label>
            <input type="number" id="age" name="age" placeholder="Âge" required>
        </div>
        <div class="input-group">
            <label for="domaine">Niveau d'étude / domaine</label>
            <input type="text" id="domaine" name="domaine" placeholder="Niveau d'étude / domaine" required>
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        </div>
        <div class="privacy-policy">
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">En soumettant ce formulaire, j'accepte que les données saisies soient collectées pour traiter ma demande.</label>
        </div>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
</main>

<?php include('../includes/footer.php'); ?>
