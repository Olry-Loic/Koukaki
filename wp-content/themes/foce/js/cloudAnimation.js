  document.addEventListener("DOMContentLoaded", function () {
    // Sélectionnez l'élément HTML de votre section "banner"
    const bannerSection = document.querySelector(".place");
  
    // Sélectionnez l'image parallaxe
    const logoParallax = document.querySelector(".cloud-parallax img");
    
    // Sélectionnez le logo 
    const logo = document.querySelector(".cloud");
  
    // Fonction de callback pour l'intersection observer
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
  
      // Limitez la translation à 300px 
      const parallaxTranslateX = Math.min(scrollPosition / 4, 300);
      logoParallax.style.transform = "translate3d(" + parallaxTranslateX + "px, 0, 0)";
  
      // Limitez la translation à 300px 
      const logoTranslateX = Math.min(-scrollPosition / 10, 300);
      logo.style.transform = "translate3d(" + logoTranslateX + "px, 0, 0)";
    }
  });