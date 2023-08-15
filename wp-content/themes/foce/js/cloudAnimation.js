  // Attendre que le document soit chargé avant d'ajouter le gestionnaire d'événement de défilement
  document.addEventListener("DOMContentLoaded", function () {
    // Sélection de l'élément HTML de votre section
    const bannerSection = document.querySelector(".place");
  
    // Sélection de limage 
    const logoParallax = document.querySelector(".cloud-parallax img");
    
    // Sélection de limage 
    const logo = document.querySelector(".cloud");
  
    // Fonction pour l'intersection observer 
    function handleIntersection(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // L'image est visible à l'écran, ajoutez l'effet de parallaxe
          window.addEventListener("scroll", updateParallax);
          observer.unobserve(entry.target);
        }
      });
    }
  
    // Créez un IntersectionObserver pour surveiller l'image parallaxe
    const intersectionObserver = new IntersectionObserver(handleIntersection);
    intersectionObserver.observe(logoParallax);
  
    // Fonction pour mettre à jour l'effet de parallaxe
    function updateParallax() {
      // Obtenez la position de défilement actuelle
      const scrollPosition = window.scrollY;
  
      // Limite l'ecart entre les nuages 
      const parallaxTranslateX = Math.min(300);
      logoParallax.style.transform = "translate3d(" + parallaxTranslateX + "px, 0, 0)";
  
      // Limitez la translation à 300px 
      const logoTranslateX = Math.min(-scrollPosition / 10, 300);
      logo.style.transform = "translate3d(" + logoTranslateX + "px, 0, 0)";
    }
  });