let currentIndex = 0;
const itemsPerSlide = 5;
function showSlide() {
    const productContainer = document.querySelector('.product-container');
    productContainer.style.transform = `translateX(${-currentIndex * (100 / itemsPerSlide)}%)`;
}

function next() {
    const totalItems = document.querySelectorAll('.product').length;
    currentIndex = (currentIndex + itemsPerSlide) % totalItems;
    showSlide();
}
function prev() {
    const totalItems = document.querySelectorAll('.product').length;
    currentIndex = (currentIndex - itemsPerSlide + totalItems) % totalItems;
    showSlide();
}
document.addEventListener('DOMContentLoaded', showSlide);