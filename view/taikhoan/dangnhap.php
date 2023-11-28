<div class="log-in">
  <div class="log-in__box">
    <div class="log-in-logo">
      <img src="view/images/Nike_logo.png" alt="">
    </div>
    <h2>ĐĂNG NHẬP TÀI KHOẢN NIKESTORE</h2>
    <!-- Form đăng nhập -->
    <form method="post" action="index.php?act=dangnhap">
      <input class="w100 log-in-row" type="text" name="user" id="" placeholder="Tên đăng nhập" required><br>
      <input class="w100 log-in-row" type="password" name="pass" id="" placeholder="Mật khẩu" required><br>
      <div class="save-user">
        <input type="checkbox" name="ghinho" id=""> Ghi nhớ tài khoản ?
      </div>
      <p class="thongbao" style="color:red ; margin-top: 20px;">
      <?php
      if (isset($thongbao) && $thongbao != "") {
        echo $thongbao;
      }
      ?>
    </p>
      <div class="log-in__text">
        <a href="">Chính sách quyền riêng tư</a> và <a href="">Điều khoản sử dụng của Nike.</a>
      </div>
      <div>
        <input class="log-btn w100" type="submit" name="dangnhap" value="Đăng nhập">
      </div>
    </form>
    <div class="repass"> Bạn không nhớ mật khẩu? <a href="">Quên mật khẩu</a> </div>
    <div class="join-user"> Bạn không phải thành viên Nike? <a href="index.php?act=dangky">Tham gia với chúng tôi</a> </div>
  </div>
</div>
