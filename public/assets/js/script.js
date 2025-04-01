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
  

// Page inscription dynamique²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²




