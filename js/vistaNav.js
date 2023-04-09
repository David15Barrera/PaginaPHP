//Colocar la fecha actual
var currentYear = new Date().getFullYear();
document.getElementById("currentYear").innerHTML = currentYear;

//colocar el nav en la parte de enfrente
var navHeight = document.querySelector('nav__hero').offsetHeight;
document.body.style.paddingTop = navHeight + 'px';

//Para hacer el efecto de subir y bajar
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});