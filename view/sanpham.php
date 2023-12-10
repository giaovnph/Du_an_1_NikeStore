<div class="product-col">
    <div class="title-mnd"></div>

    <div class="product-col-left">
        <div class="mnd">
            <div class="nd-mnd" onclick="click0()">

                <a href="#">Giới tính <i id="angne" class="fa-solid fa-angle-down"></i></a>
                <div id="gioitinh" onclick="stopPropagation(event)">
                    <div>
                        <input type="checkbox"><label>Nam</label><br>
                    </div>
                    <div>
                        <input type="checkbox"><label>Nữ</label><br>
                    </div>
                    <div>
                        <input type="checkbox"><label>Khác</label><br>
                    </div>
                </div>
            </div>
            <hr>

            <div class="nd-mnd" onclick="click1()">
                <a href="#">Kids<i id="angne" class="fa-solid fa-angle-down"></i></a>
                <div id="kid" onclick="stopPropagation(event)">
                    <div>
                        <input type="checkbox"><label>Boys</label><br>
                    </div>
                    <div>
                        <input type="checkbox"><label>Girls</label><br>
                    </div>
                </div>
            </div>
            <hr>
            <div class="nd-mnd" onclick="click2()">
                <a href="#">Mua sắm theo giá <i id="angne" class="fa-solid fa-angle-down"></i></a>
                <div id="price" onclick="stopPropagation(event)">
                    <div>
                        <input type="checkbox"><label>Dưới 500.000 đ</label><br>
                    </div>
                    <div>
                        <input type="checkbox"><label>500.0000 đ ~ 1.000.000 đ</label><br>
                    </div>
                    <div>
                        <input type="checkbox"><label>1.000.000 đ ~ 2.000.000 đ</label><br>
                    </div>
                    <input type="checkbox"><label>Trên 2.000.000 đ</label><br>

                </div>
            </div>
            <hr>
            <div class="nd-mnd" onclick="click3()">
                <a href="#">Giảm giá & Ưu đãi <i id="angne" class="fa-solid fa-angle-down"></i></a>
                <div id="sale" onclick="stopPropagation(event)">
                    <div>
                        <input type="checkbox"><label>Sale</label><br>
                    </div>


                </div>
            </div>
            <hr>

            <div class="nd-mnd" onclick="click4()">
                <a href="#">Màu sắc<i id="angne" class="fa-solid fa-angle-down"></i></a>
                <div id="color" onclick="stopPropagation(event)">
                    <a href="#">
                        <span class="hinh " style="background-color: red;"></span>
                        <span class="hinh " style="background-color: green;"></span>
                        <span class="hinh " style="background-color: blue;"></span><br>

                        <span class="hinh " style="background-color: black;"></span>
                        <span class="hinh " style="background-color: blue;"></span>
                        <span class="hinh " style="background-color: white;"></span><br>

                        <span class="hinh " style="background-color: yellow;"></span>
                        <span class="hinh " style="background-color: purple;"></span>
                        <span class="hinh " style="background-color: pink;"></span><br>
                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="product-col-right">
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $link = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            echo '
          <div class="product-box">
              <div>
                  <a href="' . $link . '"><img class="product-box__img" src="' . $hinh . '" alt=""></a>
              </div>
              <div class="product-box__des">
                  <a href="' . $link . '">
                      <h3 class="product-name">' . $name . '</h3>
                  </a>
                  <h3 class="product-price"><span>' . number_format($gia, 0, '.', '.') . 'đ</span></h3>
              </div>
          </div>';
        }
        ?>
    </div>
</div>
<script src="./view/css/main.js"></script>
