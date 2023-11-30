<div class="cart-content mb">
  <div class="mr">
    <form action="index.php?act=xnbill" method="post">
      <div class="mb">
        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
        <div class="boxcontent formtaikhoan from-user-input">
          <table>
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
            <tr>
              <td><strong>Nguời đặt hàng</strong></td>
              <td colspan="2"><input type="text" name="name" id="" value="<?= $user ?>"></td>
            </tr>
            <tr>
              <td><strong>Địa chỉ</strong></td>
              <td><input type="text" name="diachi" id="" value="<?= $diachi ?>"></td>
            </tr>
            <tr>
              <td><strong>Email</strong></td>
              <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
            </tr>
            <tr>
              <td><strong>Điện thoại</strong></td>
              <td><input type="text" name="sdt" id="" value="<?= $sdt ?>"></td>
            </tr>
          </table>

        </div>
      </div>
      <div class="mb">
        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
        <div class="boxcontent">
          <table>
            <tr>
              <td><input type="radio" name="pttt" value="1" id="" checked>  Trả tiền khi nhận hàng</td>
            </tr>
            <tr>
              <td><input type="radio" name="pttt" value="2" id="">  Chuyển khoản ngân hàng</td>
            </tr>
            <tr>

              <td><input type="radio" name="pttt" value="3" id="">  Thanh toán online</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="mb">
        <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
        <div class="boxcontent">
          <div class="mb10 frmdsloai">
            <table>
              <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
              <?php
              viewcart(0);
              ?>

            </table>
          </div>
        </div>
      </div>
      <div class="mb10 frmdsloai">
        <input name="dongydathang" type="submit" value="XÁC NHẬN ĐẶT HÀNG">
      </div>
    </form>
  </div>
</div>
