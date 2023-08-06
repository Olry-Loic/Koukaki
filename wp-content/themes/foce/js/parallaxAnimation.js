 // Attendez que le document soit chargé avant d'ajouter le gestionnaire d'événement de défilement
 document.addEventListener("DOMContentLoaded", function () {
  // Sélectionnez l'élément HTML de votre section "banner"
  const bannerSection = document.querySelector(".video");

  // Ajoutez un gestionnaire d'événement de défilement à la fenêtre
  window.addEventListener("scroll", function () {
    // Obtenez la position de défilement actuelle
    const scrollPosition = window.scrollY;

    // Mettez à jour la position verticale de l'image parallaxe en fonction de la position de défilement
    const logoParallax = document.querySelector(".logo-parallax img");
    logoParallax.style.transform = "translate3d(0, " + -scrollPosition / 4 + "px, 0)";

    // Mettez à jour la position verticale du logo en fonction de la position de défilement (à la moitié de la vitesse de l'image)
    const logo = document.querySelector(".logo");
    logo.style.transform = "translate3d(0, " + +scrollPosition / 6 + "px, 0)";
  });
});