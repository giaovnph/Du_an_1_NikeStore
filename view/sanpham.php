
<div class="product-col">
    <div class="product-col-left">
        
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
                  <h3 class="product-price"><span>' . $gia . '$</span></h3>
              </div>
          </div>';
        }
        ?>
    </div>
</div>
