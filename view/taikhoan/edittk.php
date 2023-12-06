<div class="log-in">
  <div class="log-in__box">
    <div class="log-in-logo">
      <img src="view/images/Nike_logo.png" alt="">
    </div>
    <h2>THÔNG TIN TÀI KHOẢN</h2>
    <!-- Form cập nhật tài khoản -->
    <?php
            if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
          ?>
    <form action="index.php?act=edittk" method="post" style="text-align: left;width: 400px; ">
     <input type="hidden" name="id" value="<?=$id?>">
      Tên đăng nhập
      <input class="w100 log-in-row" type="text" name="user" id="" placeholder="Tên đăng nhập" value="<?=$user?>" required><br>
      Mật khẩu    
      <input class="w100 log-in-row" type="password" name="pass" id="" placeholder="Mật khẩu" value="<?=$pass?>" required><br>
      Email
      <input class="w100 log-in-row" type="email" name="email" id="" placeholder="Email" value="<?=$email?>" required><br>
      Địa chỉ
      <input class="w100 log-in-row" type="text" name="diachi" id="" placeholder="Địa chỉ" value="<?=$diachi?>" required><br>
      Số điện thoại
      <input class="w100 log-in-row" type="text" name="sdt" id="" placeholder="Số điện thoại" value="<?=$sdt?>" required><br>
      <div class="log-in__text">
      <p class="thongbao" style="color:green ;">
      <?php
      if (isset($thongbao) && $thongbao != "") {
        echo $thongbao;
      }
      ?>
      </p>
      </div>
      <div>
      <input class="log-btn w100" type="reset" value="Nhập lại">
        <input class="log-btn w100" name="capnhat" type="submit" value="Cập nhật" onclick="return confirm('Bạn chắc chắn muốn thực hiện hành động này?')">
      </div>
     
    </form>
  </div>
</div>
