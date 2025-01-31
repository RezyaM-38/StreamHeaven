// FAQ Accordion
document.addEventListener("DOMContentLoaded", () => {
  const accordeonContainer = document.querySelector(".accordeon_container");

  accordeonContainer.addEventListener("click", (e) => {
    if (e.target.classList.contains("accordeon_bouton")) {
      const currentButton = e.target;
      const panel = currentButton.nextElementSibling;

      // Gestion de l'état actif du bouton et panneau
      currentButton.classList.toggle("active");
      panel.style.maxHeight = panel.style.maxHeight ? null : panel.scrollHeight + "px";
    }
  });

  // Initialisation des panneaux à hauteur zéro
  const panels = document.querySelectorAll(".panel_accordeon");
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
});

// Slider Principal avec Navigation Automatique
const mySlides = document.querySelectorAll('.myslide_fade');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;
let slideTimer = setInterval(autoSlide, 8000);

// Afficher le premier slide dès le début
document.addEventListener("DOMContentLoaded", () => {
  showSlide(currentIndex);
});

function autoSlide() {
  currentIndex++;
  showSlide(currentIndex);
}

function showSlide(index) {
  if (index >= mySlides.length) currentIndex = 0;
  if (index < 0) currentIndex = mySlides.length - 1;

  mySlides.forEach(slide => slide.style.display = "none");
  dots.forEach(dot => dot.classList.remove("active"));

  mySlides[currentIndex].style.display = "block";
  dots[currentIndex].classList.add("active");
}

function plusSlides(n) {
  showSlide(currentIndex += n);
  resetTimer();
}

function currentSlide(n) {
  currentIndex = n;
  showSlide(currentIndex);
  resetTimer();
}

function resetTimer() {
  clearInterval(slideTimer);
  slideTimer = setInterval(autoSlide, 8000);
}

// Slider Bande Recommandation
const slider = document.querySelector('.slider_container_recommander');
const prevButton = document.getElementById('Previous');
const nextButton = document.getElementById('Next');
const scrollAmount = 300; // Valeur de défilement

// Défilement à gauche
prevButton.addEventListener('click', () => {
  slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

// Défilement à droite
nextButton.addEventListener('click', () => {
  slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});


// payement

(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {

        event.preventDefault();
        window.location.href = 'recommandé1.php';
      }

      form.classList.add('was-validated')
    }, false)
  })
})();

// configuration themes clair/sombre

if (!localStorage.getItem('theme')) {
  document.documentElement.setAttribute('data-theme', 'dark');
}


function toggleTheme() {
  const currentTheme = document.documentElement.getAttribute('data-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

  document.documentElement.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
}

document.querySelector("#theme-toggle-button").addEventListener("click", toggleTheme);
