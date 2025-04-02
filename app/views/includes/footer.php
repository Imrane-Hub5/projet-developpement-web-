<footer>
    <div class="footer-content">
        <div class="footer-column">
            <h3>Informations légales</h3>
            <a href="mentions-legales.php">Mentions légales</a>
            <a href="politique-confidentialite.php">Confidentialité</a>
            <a href="politique-cookies.php">Cookies</a>
        </div>
        
        <div class="footer-column">
            <h3>Nos Services</h3>
            <a href="#">Offres de stage</a>
            <a href="#">À propos de nous</a>
            <a href="#">Contact</a>
        </div>
        
        <div class="footer-column">
            <h3>Suivez-nous</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>
</footer>


<style>
footer {
    background: linear-gradient(90deg, #0d1b2a, #1b263b);
    color: #f0f0f0;
    padding: 40px 20px;
    font-size: 14px;
    box-shadow: 0px -4px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    max-width: 300px;
    padding: 10px;
}

.footer-column h3 {
    font-size: 16px;
    color: #66a3ff;
    margin-bottom: 10px;
    font-weight: 600;
}

.footer-column a {
    display: block;
    color: #ccc;
    text-decoration: none;
    margin: 5px 0;
    transition: all 0.3s ease;
}

.footer-column a:hover {
    color: #ffffff;
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }
}
</style>
