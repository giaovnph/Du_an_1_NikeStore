<div class="box-chitiet">
    <?php
    extract($spct);
    ?>
    <div class="box-chitiet__col">
        <?php
        $hinh = $img_path . $img;
        echo
        '<img class="box-chitiet__col-img" src="' . $hinh . '" alt="">'
        ?>
    </div>
    <div class="box-chitiet__right">
        <div class="box-chitiet__des">
            <h2><?= $name ?></h2>
            <h3><?= $gia ?> $</h3>
        </div>

        <div class="box-chitiet__text">
            <?= $mota ?>
        </div>
        <a class="btn-love__link" href="">
            <div class="btn-love">
                Yêu thích
                <img src="view/images/heart-icon.png" alt="">
            </div>
        </a>

        <div class="box-chitiet__size">
            <form action="" method="post">
                <input type="submit" class="btn-cart" value="Thêm vào giỏ hàng"><br>
                <label for="">Chọn kích cỡ : </label>
                <select name="" id="" class="select-size">
                    <option value=""></option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
            </form>
        </div>
    </div>
</div>
<h2 style="margin: 0 5% 100px 5% ;">CÓ THỂ BẠN QUAN TÂM</h2>
<div class="product-col-right" style="margin: 0 5%;">
    <?php
    foreach ($spcungloai as $sp) {
        extract($sp);
        $link = "index.php?act=sanphamct&idsp=" . $id;
        $hinh = $img_path . $img;
        echo '
    <div class="product-box">
        <div>
            <a href="'.$link.'"><img class="product-box__img" src="'.$hinh.'" alt=""></a>
        </div>
        <div class="product-box__des">
            <a href="'.$link.'">
                <h3 class="product-name">'.$name.'</h3>
            </a>
            <h3 class="product-price"><span>' . $gia . '$</span></h3>
        </div>
    </div>';
    }
    ?>
</div>
