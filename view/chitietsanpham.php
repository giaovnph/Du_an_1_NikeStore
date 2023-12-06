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
            <form action="index.php?act=addtocart" method="post">
                <?php
                echo ' 
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="gia" value="' . $gia . '">';
                ?>
                <input type="submit" class="btn-cart" name="addtocart" value="Thêm vào giỏ hàng"><br>
                <label for="">Kích cỡ : </label>
                <select name="kichco" id="" class="select-size">
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
                <span class="spchitiet-gach">|</span>
                <label for="">Số lượng : </label>
                <select name="soluong" id="" class="select-size">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </form>
        </div>
    </div>
</div>
    <div class="row mb">
      <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row boxcontent">
                <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['user']?></td>
                        <td><?php echo date("d/m/y", strtotime($value['ngaybinhluan'])) ?></td>
                        <td><?php echo $value['noidung']?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idsp" value="<?=$id?>">
                    <input type="text" name="noidung" required>
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
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
