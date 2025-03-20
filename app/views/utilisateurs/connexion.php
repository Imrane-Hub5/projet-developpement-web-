<?php include('../includes/header.php'); ?>

<body>
    <header class="header">
        <div class="logo">EasyStage</div>
        <div class="icons">
            <div class="notification">
                <span class="icon">🔔</span>
                <span class="badge">1</span>
            </div>
            <div class="profile">👤</div>
            <div class="menu">☰</div>
        </div>
    </header>

    <main class="connexion-container">
        <h2>SE CONNECTER</h2>
        <form class="connexion-form" action="#" method="post">
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
            <a href="inscription.html" class="btn-outline">Créer un compte</a>
        </div>
    </main>
</body>
</html>