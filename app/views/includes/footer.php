<footer>

    <div class="legal">
        <h3>Informations légales</h3>
        <a href="mentions-legales.php">Mentions légales</a> 
        <a href="politique-confidentialite.php">Confidentialité</a> >
        <a href="politique-cookies.php">Cookies</a>
      
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

<!-- Popup Cookie -->
<div class="cookie-popup" id="cookiePopup">
    <p>🍪 Ce site utilise des cookies pour améliorer votre expérience. 
        <a href="politique-cookies.php" style="color: #66a3ff;">En savoir plus</a>.
    </p>
    <button id="acceptCookies">Accepter</button>
</div>

</body>
</html>

<style> 
footer {
  background: linear-gradient(90deg, #0d1b2a, #1b263b);
  color: #f0f0f0;
  padding: 40px 20px;
  font-size: 14px;
  box-shadow: 0px -4px 12px rgba(0, 0, 0, 0.2);
  position: relative;
  text-align: center;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 40px;
}

footer h3 {
  font-size: 16px;
  color: #66a3ff;
  margin-bottom: 10px;
  font-weight: 600;
}

footer a {
  display: block;
  color: #ccc;
  text-decoration: none;
  margin: 5px 0;
  transition: all 0.3s ease;
}

footer a:hover {
  color: #ffffff;
  transform: translateX(5px);
}

footer .links,
footer .legal {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-width: 200px;
}

@media (max-width: 600px) {
  footer {
    flex-direction: column;
    align-items: center;
    gap: 30px;
  }
}

</style>