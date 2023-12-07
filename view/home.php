
   <!-- Slide banner -->
   <div class="header-bot-1">
            <span >Mua sắm, trải nghiệm và đồng hàng cùng chúng tôi.</span>
            <p>Cho dù hôm nay bạn muốn làm gì thì điều đó vẫn tốt hơn khi là Thành viên.</p>
            <p class="a">Chúng tôi luôn đồng hành cùng bạn</p>
        </div>
   <div class="container">
       <div class="slide-banner">
           <div class="mySlides fade">
               <div class="number-text">1 / 5</div>
               <img src="view/images/banner11.jpg" style="width:100%">
           </div>
           <div class="mySlides fade">
               <div class="number-text">2 / 5</div>
               <img src="view/images/banner12.jpg" style="width:100%">
           </div>
           <div class="mySlides fade">
               <div class="number-text">3 / 5</div>
               <img src="view/images/banner13.jpg" style="width:100%">
           </div>
           <div class="mySlides fade">
               <div class="number-text">4 / 5</div>
               <img src="view/images/banner14.jpg" style="width:100%">
           </div>
           <div class="mySlides fade">
               <div class="number-text">5 / 5</div>
               <img src="view/images/banner15.jpg" style="width:100%">
           </div>
       </div>
   </div>
   <!-- Tiêu đề giữa trang -->
   <div class="listsp-des">
       <h1>XU HƯỚNG SẢN PHẨM MÙA HÈ</h1>
       <p>Thiết kế linh hoạt - Kiểu dáng thể thao</p>
       <a class="cta-btn listsp-des__btn" href="index.php?act=sanpham">SHOP NOW</a>
   </div>
   <!-- ===Slide san pham=== -->
   <div class="carousel-container">
       <div class="product-container">
           <?php
            foreach ($top15sp as $sp) {
                extract($sp);
                $link = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                echo '
           <div class="product"><a href="' . $link . '"><img src="' . $hinh . '" alt=""></a>
               <div class="product-des">
                   <p><a href="' . $link . '">' . $name . '</a>    <span class="price-color">' . $gia . '$</span></p>
               </div>
           </div>';
            }
            ?>
       </div>
       <button class="btn btn-prev" onclick="prev1()">❮</button>
       <button class="btn btn-next" onclick="next1()">❯</button>
   </div>
   <!-- Banner giữa trang -->
   <div class="mid-des">
       <a href="index.php?act=sanpham"><img src="view/images/mid-banner.jpg" alt=""></a>
   </div>
   <!-- Tiêu đề giữa trang -->
   <div class="listsp-des">
       <h1>SẢN PHẨM MỚI VÀ NỔI BẬT</h1>
       <p>Sự kết hợp hoàn hảo giữa thời trang và phong cách</p>
       <a class="cta-btn" href="index.php?act=sanpham">SHOP NOW</a>
   </div>
   <!-- ===Slide san pham=== -->
   <div class="carousel-container">
       <div class="product-container product-container2">
           <?php
            foreach ($top15sp as $sp) {
                extract($sp);
                $link = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                echo '
           <div class="product"><a href="' . $link . '"><img src="' . $hinh . '" alt=""></a>
               <div class="product-des">
                   <p><a href="' . $link . '">' . $name . '</a>    <span class="price-color">' . $gia . '$</span></p>
               </div>
           </div>';
            }
            ?>
       </div>
       <button class="btn btn-prev" onclick="prev2()">❮</button>
       <button class="btn btn-next" onclick="next2()">❯</button>
   </div>
   <h1 style="text-align: center;margin-bottom: 80px;">SẢN PHẨM MANG TÍNH BIỂU TƯỢNG</h1>
   <div class="product_tb">
       <div class="product_tb1">
           <div class="product_tb0">
               <a href=""><img onmouseover="changeImg(this, 'view/images/NikeWhite_Two.png')" onmouseout="normalImg(this,'view/images/NikeWhite_One.png')" src="view/images/NikeWhite_One.png" /></a>
           </div>
           <div class="product_tt1">
               Vào những năm 70, Nike là mẫu giày mới trên thị trường, quá mới mẻ, chúng tôi vẫn đang thâm nhập
               vào lĩnh vực bóng rổ và thử nghiệm các nguyên mẫu trên đôi chân của đội địa phương của chúng tôi. Tất nhiên,
               thiết kế được cải thiện qua nhiều năm nhưng cái tên vẫn không thay đổi. Nike Blazer Mid '77 Vintage cổ
               điển ngay từ đầu..
           </div>
       </div>

       <div class="product_tb1">
           <div class="product_tt1">
               Air Jordan 1 hi flyease kết hợp phong cách đáng thèm muốn của đôi giày thể thao đặc trưng đầu tiên của Michael
               Jordan với hệ thống nhập bằng một tay nhanh chóng và dễ dàng. Không có dây để buộc, chỉ có một khóa kéo bao
               quanh và hai dây đai để đảm bảo vừa vặn tùy chỉnh..
           </div>
           <div class="product_tb0">
               <a href=""><img onmouseover="changeImg(this,'view/images/NikeRed_Two.png')" onmouseout="normalImg(this,'view/images/NikeRed_One.png')" src="view/images/NikeRed_One.png" /></a>
           </div>
       </div>
   </div>
   <h1 style="text-align: center;margin: 80px 0;">THIẾT KẾ THEO LỨA TUỔI VÀ GIỚI TÍNH</h1>
   <div class="bot-banner">
       <div class="bot-banner__item">
           <a href="http://localhost/php/Du_an_1_NikeStore/index.php?act=sanpham&iddm=16"><img src="view/images/men.jpg" alt=""></a>
           <a class="bot-banner-btn cta-btn" href="">Men's</a>
       </div>
       <div class="bot-banner__item">
           <a href="http://localhost/php/Du_an_1_NikeStore/index.php?act=sanpham&iddm=17"><img src="view/images/women.jpg" alt=""></a>
           <a class="bot-banner-btn cta-btn" href="">Women's</a>
       </div>
       <div class="bot-banner__item">
           <a href="http://localhost/php/Du_an_1_NikeStore/index.php?act=sanpham&iddm=18"><img src="view/images/kid.jpg" alt=""></a>
           <a class="bot-banner-btn cta-btn" href="">Kid's</a>
       </div>
   </div>
   <script>
       var slideIndex = 0;
       showSlides();

       function showSlides() {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
           }
           slideIndex++;
           if (slideIndex > slides.length) {
               slideIndex = 1
           }
           slides[slideIndex - 1].style.display = "block";
           setTimeout(showSlides, 3000); // Change image every 3 seconds
       }
       const productContainer1 = document.querySelector(".product-container");
       const productContainer2 = document.querySelector(".product-container2");
       let currentIndex1 = 0;
       let currentIndex2 = 0;

       function showProducts1() {
           const newPosition1 = -currentIndex1 * 250;
           productContainer1.style.transform = `translateX(${newPosition1}px)`;
       }

       function showProducts2() {
           const newPosition2 = -currentIndex2 * 250;
           productContainer2.style.transform = `translateX(${newPosition2}px)`;
       }

       function next1() {
           currentIndex1 = (currentIndex1 + 1) % 10;
           showProducts1();
       }

       function prev1() {
           currentIndex1 = (currentIndex1 - 1 + 10) % 10;
           showProducts1();
       }

       function next2() {
           currentIndex2 = (currentIndex2 + 1) % 10;
           showProducts2();
       }

       function prev2() {
           currentIndex2 = (currentIndex2 - 1 + 10) % 10;
           showProducts2();
       }
       //hover ảnh sản phẩm
       function changeImg(img, src) {
           img.src = src;
       }

       function normalImg(img, src) {
           img.src = src;
       }
   </script>
