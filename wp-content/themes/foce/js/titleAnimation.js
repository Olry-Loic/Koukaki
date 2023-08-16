// Sélectionner toutes les balises <span> avec la classe "invisible"
const invisibleSpans = document.querySelectorAll('span.invisible');

// Créer l'observateur d'intersection
const observer = new IntersectionObserver(handleIntersection, { threshold: 0.15 });

function handleIntersection(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // suppression de la class invisible
      entry.target.classList.remove('invisible');

      // ajout de la class 'visible'
      entry.target.classList.add('visible');
    } else {
      // si l'élemant n'est plus visible on supprime visible et on ajouter invisible.
      entry.target.classList.add('invisible');
      entry.target.classList.remove('visible');
    }
  });
}

// Observer chaque balise <span> avec la classe "invisible"
invisibleSpans.forEach(span => observer.observe(span));