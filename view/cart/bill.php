<div class="all-tt">

  <!-- /* ===========Form thanh toán============*/ -->

  <div class="form-tt">
    <form action="index.php?act=xnbill" method="post">

        <?php
        if (isset($_SESSION['user'])) {
          $user = $_SESSION['user']['user'];
          $diachi = $_SESSION['user']['diachi'];
          $email = $_SESSION['user']['email'];
          $sdt = $_SESSION['user']['sdt'];
        } else {
          $user = "";
          $diachi = "";
          $email = "";
          $sdt = "";
        }
        ?>

        <div class="bangthongtin">
          <div>
            <span>Bạn muốn nhận đơn hàng bằng cách nào ?</span>
            <div class="bttt">
              <p><a href="#"><i id="icon" class="fa-solid fa-calendar-check"></i> Giao hàng trực tiếp <i id="icon-tich" class="fa-solid fa-circle"></i></a></p>
            </div>
          </div>
          <div>
            <span>Nhập tên và địa chỉ của bạn:</span><br>

            <input type="text" name="name" required placeholder="Họ và tên" value="<?= $user ?>"><br>

            <input type="text" name="diachi" required placeholder="Địa chỉ" value="<?= $diachi ?>"><br>

            <div class="bttt">
              <p><a href="#"><i id="icon" class="fa-solid fa-location-dot"></i> Việt Nam <i id="icon-tich" class="fa-solid fa-circle"></i></a href="#"></p>
            </div>

          </div>
          <div>
            <span>Thông tin liên lạc của bạn là gì ?</span><br>

            <input type="email" name="email" required placeholder="Email" value="<?= $email ?>"> <br>

            <input type="text" name="sdt" required placeholder="Số điện thoại" value="<?= $sdt ?>">
            <div class="tt" style="margin-top: 30px;">
            <span >Lựa chọn phương thức thanh toán ?</span><br>
              <select name="pttt" id="">
                <option value="1" >Thanh toán khi nhận hàng</option>
              </select>
            </div>

          </div>

          <div class="nut-tt">
            <a href=""><input type="submit" name="dongydathang" value="Đặt hàng"></a>
          </div>
        </div>
        <!-- /* ============Tóm tắt chi phí============*/ -->

    
      <div class="tomtat-tt">
        <div class="bangsanpham">
          <?php
          global $img_path;
          $tong = 0;
          foreach ($_SESSION['mycart'] as $sp) {
            extract($sp);
            $i = 0;
            $hinhpath = $img_path . $sp['3'];
            $tong += $sp['6'];
            if (is_file($hinhpath)) {
              $hinh = '<img src="' . $hinhpath . '" alt="" width="120px">';
            } else {
              $hinh = "No Image";
            }
            echo '
            <div class="thongtin-tt">
            <div>
              '.$hinh.'
            </div>
            <div>
              <div>'.$sp['1'].'</div>
              <div>Kích cỡ: '.$sp['2'].'</div>
              <div>Đơn giá: '.$sp['4'].' $</div>
              <div>Số lượng: '.$sp['5'].'</div>
            </div>
            </div><br>         
            ';
          
          }?>
        </div>
          <?php
          echo '
        <hr>
        <div class="bangchiphi">
        <br><span>Chi phí</span> <span class="gia-tt">'.$tong.' $</span>
          <br><br>

          <span>Giao hàng/Vận chuyển</span> <span class="gia-tt">: Miễn phí</span><br><br>
          <hr><br>
          <span class="tc-tt">Tổng cộng</span><span class="gia-tt">'.$tong.' $</span><br><br>
          
        </div>
        ';
        ?>

      </div>


    </form>
  </div>
</div>
