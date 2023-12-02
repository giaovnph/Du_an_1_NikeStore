



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

      <div>
        <span>Bạn muốn nhận đơn hàng bằng cách nào?</span>
        <div class="bttt">
          <p><a href="#"><i id="icon" class="fa-solid fa-calendar-check"></i> Giao nó <i id="icon-tich" class="fa-solid fa-circle"></i></a></p>
        </div>
      </div>
      <div>
        <span>Nhập tên và địa chỉ của bạn:</span><br>

        <input type="text" id="user" placeholder="Họ và tên" value="<?= $user ?>"><br>

        <input type="text" id="diachi" placeholder="Địa chỉ" value="<?= $diachi ?>"><br>
        <input type="text" id="diachi" placeholder="Tỉnh/Thành phố" value="<?= $diachi ?>"><br>




        <div class="bttt">
          <p><a href="#"><i id="icon" class="fa-solid fa-location-dot"></i> Việt Nam <i id="icon-tich" class="fa-solid fa-circle"></i></a href="#"></p>
        </div>

      </div>
      <div>
        <span>Thông tin liên lạc của bạn là gì?</span><br>

        <input type="email" id="email" placeholder="Email" value="<?= $email ?>"> <br>

        <input type="text" id="sdt" placeholder="Số điện thoại" value="<?= $sdt ?>">
        <div class="tt">
          <select name="" id="">
            <option value="0">Phương thức thanh toán</option>

            <option value="1">Thanh toán khi nhận hàng</option>
          </select>
        </div>

      </div>

      <div class="nut-tt">
        <a href=""> <button type="submit" id="submitButton">Tiếp tục</button></a>
      </div>
    </form>
  </div>



  <!-- /* ============Tóm tắt chi phí============*/ -->

  <div>
    <p class="tieude-tt">Tóm tắt theo thứ tự</p><br>
    <div class="tomtat-tt">
      <span>Chi phí</span> <span class="gia-tt">2000000</span>
      <br>

      <span>Giao hàng/Vận chuyển</span> <span class="gia-tt">Miễn phí</span>
      <hr>

      <span class="tc-tt">Tổng cộng</span><span class="gia-tt">2000000</span>
      <hr>
      <div class="thongtin-tt">
        <div>
          <img src="view/images/product_10.webp" alt="" width="150px">
        </div>
        <div>
          <div>Nike </div>
          <div>Kích cỡ: 41</div>
          <div>Số lượng: 1</div>
        </div>
      </div>
      <div class="thongtin-tt">
        <div>
          <img src="view/images/product_10.webp" alt="" width="150px">
        </div>
        <div>
          <div>Nike </div>
          <div>Kích cỡ: 41</div>
          <div>Số lượng: 1</div>
        </div>
      </div>
      <div class="thongtin-tt">
        <div>
          <img src="view/images/product_10.webp" alt="" width="150px">
        </div>
        <div>
          <div>Nike </div>
          <div>Kích cỡ: 41</div>
          <div>Số lượng: 1</div>
        </div>
      </div>
      <div class="thongtin-tt">
        <div>
          <img src="view/images/product_10.webp" alt="" width="150px">
        </div>
        <div>
          <div>Nike </div>
          <div>Kích cỡ: 41</div>
          <div>Số lượng: 1</div>
        </div>
      </div>
    </div>

  </div>
</div>