// Function for despliegue the hamburger menu accediendo the element with id "navbar" and activating it
function toggleMenu() {
    var navbar = document.getElementById('navbar');
    navbar.classList.toggle('active');
}


const imageOne = document.getElementById("imageOne");
const imageTwo = document.getElementById("imageTwo");
const imageThree = document.getElementById("imageThree");
const imageSelected = document.getElementById("image")

imageOne.onclick = function(){
    imageSelected.src = "./image/KhamrahVaner.jpg"
}

imageTwo.onclick = function(){
    imageSelected.src = "./image/BadeeAlOutVaner.webp"
}

imageThree.onclick = function(){
    imageSelected.src = "./image/Dior.webp"
}

// resources/js/index.js

// Array de URLs de las imágenes que queremos mostrar en la presentación.
const imageArray = [
    "./image/KhamrahVaner.jpg",
    "./image/BadeeAlOutVaner.webp",
    "./image/Dior.webp"
];

// Índice inicial para controlar qué imagen se está mostrando.
let currentIndex = 0;

// Obtenemos el elemento img del DOM donde las imágenes serán mostradas.
const imageElement = document.getElementById('image');

// Función para mostrar la siguiente imagen.
function showNextImage() {
    // Incrementamos el índice de la imagen actual.
    currentIndex++;

    // Si el índice es mayor o igual al número de imágenes, reiniciamos a 0.
    if (currentIndex >= imageArray.length) {
        currentIndex = 0;
    }

    // Cambiamos el src del elemento img a la siguiente imagen en el array.
    imageElement.src = imageArray[currentIndex];
}

// Esta función se llama una vez cuando la página se carga completamente.
document.addEventListener('DOMContentLoaded', (event) => {
    // Mostramos la primera imagen inicialmente.
    imageElement.src = imageArray[currentIndex];

    // Configuramos un intervalo para cambiar las imágenes cada 3 segundos.
    setInterval(showNextImage, 3000); // 3000 milisegundos = 3 segundos
});

