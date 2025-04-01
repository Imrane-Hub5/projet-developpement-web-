<?php include('../includes/header.php'); ?>

<main class="connexion-container">
    <h2>SE CONNECTER</h2>
    <?php
    // Afficher les erreurs de connexion si elles existent
    if (isset($_GET['error'])) {
        echo '<p style="color: red;">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>
    <form class="connexion-form" action="app\controllers\traitement_connexion.php" method="post">
        <div class="input-group">
            <label for="username">Numéro de téléphone, nom d'utilisateur, email</label>
            <input type="text" id="username" name="username" placeholder="Numéro de téléphone, nom d'utilisateur, email" required>
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn">Connexion</button>
        <a href="#" class="forgot-password">Mot de passe oublié ?</a>
    </form>

    <hr>

    <div class="create-account">
        <p>Vous n'avez pas de compte ?</p>
        <a href="inscription.php" class="btn-outline">Créer un compte</a>
    </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        const email = document.getElementById("username").value.trim();  // Utilise 'username' au lieu de 'email'
        const password = document.getElementById("password").value;

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Correction du regex pour valider un email

        // Vérification de l'email
        if (!email || !emailRegex.test(email)) {
            alert("Merci de saisir un email valide.");
            e.preventDefault(); // Empêche l'envoi du formulaire
            return;
        }

        // Vérification du mot de passe
        if (!password || password.length < 8) {
            alert("Merci de saisir un mot de passe d'au moins 8 caractères.");
            e.preventDefault(); // Empêche l'envoi du formulaire
            return;
        }
    });
});
</script>


<?php include('../includes/footer.php'); ?>
