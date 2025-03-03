function postuler() {
    alert("Votre candidature a été envoyée !");
}

function verifierConnexion() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    
    if (email === "            " && password === "            ") {
        alert("Connexion réussie !");
        return true;
    } else {
        alert("Email ou mot de passe incorrect !");
        return false;
    }
}
