<footer>
    <div class="links">
        <h3>Liens utiles</h3>
        <a href="#">Aide</a>
        <a href="#">Profils recherchés</a>
        <a href="#">Sitemap</a>
    </div>
    <div class="legal">
        <h3>Informations légales</h3>
        <a href="#">Mentions légales</a>
        <a href="#">Confidentialité</a>
        <a href="#">Cookies</a>
    </div>
    <script src="/public/assets/js/script.js"></script>

</footer>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cookiePopup = document.getElementById("cookiePopup");
        const acceptBtn = document.getElementById("acceptCookies");

        // Vérifie si l'utilisateur a déjà accepté les cookies
        if (document.cookie.indexOf("cookiesAccepted=true") === -1) {
            setTimeout(() => {
                cookiePopup.classList.add("show");
            }, 1000);
        }

        // Lorsque l'utilisateur clique sur "Accepter"
        acceptBtn.addEventListener("click", function () {
            // Envoie la requête AJAX pour enregistrer le cookie
            fetch("/set-cookie", { method: "POST" })
                .then(response => response.json())
                .then(data => {
                    console.log("Cookie accepté :", data);
                });

            // Cache le popup
            cookiePopup.style.opacity = "0";
            setTimeout(() => {
                cookiePopup.style.display = "none";
            }, 500);
        });
    });
    </script>

</body>
<div class="cookie-popup" id="cookiePopup">
    <p>🍪 Ce site utilise des cookies pour améliorer votre expérience. 
        <a href="politique-cookies.php" style="color: #66a3ff;">En savoir plus</a>.
    </p>
    <button id="acceptCookies">Accepter</button>
</div>
</body>
</html>
