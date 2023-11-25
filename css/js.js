//hover ảnh sản phẩm
function changeImg(img, src) {
    img.src = src;
  }
  function normalImg(img, src) {
    img.src = src;
  }


//Slide chuyển ảnh tự động
  var index = 0;
  function  chuyenanh() {

    var ds_anh = 'Anh_Giay'
    var anh = [
      `Anh_Giay/f.jpg`,
      `Anh_Giay/e.webp`,
      `Anh_Giay/d.webp`,
      `Anh_Giay/b.webp`,
      `Anh_Giay/c.webp`,
      ]

    document.getElementById('img').src = anh[index];
    index++;
    if (index == 5) {
      index = 0;
    }
  }
  setInterval(chuyenanh, 1000);
  
//
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

