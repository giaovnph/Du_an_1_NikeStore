<div class="log-in">
  <div class="log-in__box">
    <div class="log-in-logo">
      <img src="view/images/Nike_logo.png" alt="">
    </div>
    <h2>TRỞ THÀNH THÀNH VIÊN NIKESTORE</h2>
    <!-- Form đăng ký -->
    <form action="index.php?act=dangky" method="post">
      <input class="w100 log-in-row" type="text" name="user" id="" placeholder="Tên đăng nhập" required><br>
      <input class="w100 log-in-row" type="password" name="pass" id="" placeholder="Mật khẩu" required><br>
      <input class="w100 log-in-row" type="email" name="email" id="" placeholder="Email" required><br>
      <input class="w100 log-in-row" type="text" name="diachi" id="" placeholder="Địa chỉ" required><br>
      <input class="w100 log-in-row" type="text" name="sdt" id="" placeholder="Số điện thoại" required><br>
      <div class="log-in__text">
      <p class="thongbao" style="color:green ;">
      <?php
      if (isset($thongbao) && $thongbao != "") {
        echo $thongbao;
      }
      ?>
    </p>
        <p class="repass">Bằng cách đăng ký, bạn đồng ý với</p>
        <a href="">Chính sách quyền riêng tư</a> và <a href="">Điều khoản sử dụng của Nike.</a>
      </div>
      <div>
        <input class="log-btn w100" type="submit" name="dangky" value="Đăng ký">
      </div>
     
    </form>
    <div class="repass"> Bạn là thành viên của NikeStore ? <a href="index.php?act=dangnhap">Đăng nhập</a> </div>
  </div>
</div>
