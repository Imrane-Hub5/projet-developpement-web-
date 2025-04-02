<footer>
    <div class="footer-container">
        <div class="legal">
            <h3>Informations légales</h3>
            <a href="mentions-legales.php">Mentions légales</a>
            <a href="politique-confidentialite.php">Politique de confidentialité</a>
            <a href="politique-cookies.php">Politique de cookies</a>
        </div>
        <div class="contact">
            <h3>Contact</h3>
            <p><strong>Email :</strong> contact@monentreprise.com</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Adresse :</strong> 123 Rue Exemple, 75000 Paris, France</p>
        </div>
        <div class="social">
            <h3>Suivez-nous</h3>
            <a href="https://facebook.com/monentreprise" target="_blank">Facebook</a>
            <a href="https://twitter.com/monentreprise" target="_blank">Twitter</a>
            <a href="https://linkedin.com/company/monentreprise" target="_blank">LinkedIn</a>
        </div>
    </div>
    <script src="/public/assets/js/script.js"></script>
</footer>

<style>
footer {
  background: linear-gradient(90deg, #0d1b2a, #1b263b);
  color: #f0f0f0;
  padding: 40px 20px;
  font-size: 14px;
  box-shadow: 0px -4px 12px rgba(0, 0, 0, 0.2);
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
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

footer .footer-container {
  display: flex;
  flex-direction: column;
  gap: 30px;
  align-items: center;
}

footer .contact p, footer .social a {
  margin: 5px 0;
}

footer .social {
  display: flex;
  gap: 10px;
}

footer .social a {
  margin: 0;
}

@media (max-width: 600px) {
  footer .footer-container {
    gap: 20px;
  }
}
</style>
