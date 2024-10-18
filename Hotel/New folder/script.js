const carouselImages = document.querySelector('.carousel-images');
const images = document.querySelectorAll('.carousel-image');
const totalImages = images.length;
let currentIndex = 0;

function showNextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    const offset = -currentIndex * 100;
    carouselImages.style.transform = `translateX(${offset}%)`;
}

// Change image every 5 seconds
setInterval(showNextImage, 5000);