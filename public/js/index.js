// Function for despliegue the hamburger menu accediendo the element with id "navbar" and activating it
function toggleMenu() {
    var navbar = document.getElementById('navbar');
    navbar.classList.toggle('active');
}



const buttonImageOne = document.getElementById("buttonImageOne");
const buttonImageTwo = document.getElementById("buttonImageTwo");
const buttonImageThree = document.getElementById("buttonImageThree");
// const imageSelected = document.getElementById("image")

buttonImageOne.onclick = function() {
    currentIndex = 0;
    slideshowContainer.style.transform = `translateX(0)`;
}
 
buttonImageTwo.onclick = function() {
    currentIndex = 1; 
    slideshowContainer.style.transform = `translateX(-100%)`;
}

buttonImageThree.onclick = function() { 
    currentIndex = 2;
    slideshowContainer.style.transform = `translateX(-200%)`;
}

// Array with the URL of the images to display
const imageArray = [
    "./image/oneMillion.jpeg",
    "./image/oneMillion.jpeg",
    "./image/oneMillion.jpeg"
];

// Index reffering to the image being displayed
let currentIndex = 0;

// Obtenemos el contenedor del slideshow del DOM. 
const slideshowContainer = document.querySelector('.slideShow');

// We get the img element that is being displayed in the DOM
const imageElement = document.getElementById('image');

// Function for view the next img
function showNextImage() {
    // Increment of index of the image current
    currentIndex = currentIndex + 1;
    
    // If the index is elderly or equal the number of elements of it array, we restart to 0. This with the end of start again from the first image
    if (currentIndex >= imageArray.length) {
        currentIndex = 0;
    }

    // Ajustamos el contenedor del slideshow para mover las imágenes hacia la izquierda. 
    slideshowContainer.style.transform = `translateX(-${currentIndex * 100}%)`
}

// This function is called when once when the page battery is fully charged.
document.addEventListener('DOMContentLoaded', (event) => {
    // Mostramos la primera imagen inicialmente.
    slideshowContainer.style.transform = `translateX(0)`;

    // We set an interval to change images every 3 seconds.
    setInterval(showNextImage, 10000); // 3000 milisegundos = 3 segundos
});

