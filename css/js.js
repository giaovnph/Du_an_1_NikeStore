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

