//MENU BURGER--------------------------------------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    var burgerIcon = document.getElementById("burger-icon");
    var nav = document.getElementById("navbar");

    if (burgerIcon && nav) {
        // Toggle le menu quand on clique sur le burger
        burgerIcon.addEventListener("click", function () {
            nav.classList.toggle("show");
            document.body.classList.toggle("menu-open");

            // Changer l'image du burger en "fermer" quand le menu est ouvert
            if (nav.classList.contains("show")) {
                burgerIcon.src = "../assets/close-menu.png"; // Icône pour fermer
            } else {
                burgerIcon.src = "../assets/menu-burger.png"; // Icône pour ouvrir
            }
        });

        // Fermer le menu quand on clique en dehors
        document.addEventListener("click", function (event) {
            if (!nav.contains(event.target) && !burgerIcon.contains(event.target)) {
                nav.classList.remove("show");
                document.body.classList.remove("menu-open");
                burgerIcon.src = "../assets/menu-burger.png"; // Remet l'icône d'ouverture
            }
        });
    } else {
        console.log("Erreur : Impossible de trouver les éléments du menu !");
    }
});
//-------------------------------------------------------------------------------------------------------------MENU BURGER-







//PROFIL--------------------------------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
    var profileIcon = document.getElementById("profile-icon"); // L'icône du profil
    var modal = document.getElementById("profileModal"); // La modale
    var closeBtn = document.querySelector(".close"); // Bouton de fermeture

    // Assurer que la modale est bien cachée au départ
    if (modal) {
        modal.style.display = "none";
    }

    if (profileIcon && modal) {
        profileIcon.addEventListener("click", function () {
            modal.style.display = "flex"; // Affiche la pop-up au clic
        });

        closeBtn.addEventListener("click", function () {
            modal.style.display = "none"; // Cache la pop-up
        });

        // Fermer si on clique en dehors de la modale
        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }
});


//-------------------------------------------------------------------------------------------------------------PROFIL-