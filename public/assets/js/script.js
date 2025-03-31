// --- MENU BURGER ---
function toggleMenu() {
    document.querySelector('nav').classList.toggle('show');
    document.body.classList.toggle('menu-open');
  }
  
  // --- SCROLL DYNAMIQUE DU HEADER ---
  window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });
  
  // --- SCROLL PAR DOMAINE (avec flèches) ---
  const scrollLeft = document.querySelector(".scroll-btn.left");
  const scrollRight = document.querySelector(".scroll-btn.right");
  const domainList = document.querySelector(".domain-list");
  
  if (scrollLeft && scrollRight && domainList) {
    scrollLeft.addEventListener("click", () => {
      domainList.scrollBy({ left: -300, behavior: "smooth" });
    });
    scrollRight.addEventListener("click", () => {
      domainList.scrollBy({ left: 300, behavior: "smooth" });
    });
  }
  
  // --- BOUTONS FAVORIS ---
  document.querySelectorAll(".favorite-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.classList.toggle("active");
      btn.innerText = btn.classList.contains("active") ? "✔" : "+";
    });
  });
  

  // valider le formulaier d'inscription
  function validateForm() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const errorMsg = document.getElementById('error-message');
    errorMsg.style.display = 'none';
  
    const emailRegex = /^[\w\-.]+@([\w-]+\.)+[\w-]{2,4}$/;
    const phoneRegex = /^0[6-7]\d{8}$/;
  
    // Vérification email ou téléphone
    if (!emailRegex.test(email) && !phoneRegex.test(email)) {
      errorMsg.textContent = "Veuillez entrer un email ou un numéro de téléphone valide.";
      errorMsg.style.display = 'block';
      return false;
    }
  
    // Vérification du mot de passe
    const pwdRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]).{8,}$/;
    if (!pwdRegex.test(password)) {
      errorMsg.textContent = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.";
      errorMsg.style.display = 'block';
      return false;
    }
  
    return true;
  }
  