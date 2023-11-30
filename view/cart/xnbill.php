<div class="cart-content mb">
  <div class="boxtrai mr">
    <div class="mb">
      <div class="boxtitle"></div>
      <div class="boxcontent box-thank">
        <h2>CẢM ƠN QÚY KHÁCH ĐÃ ĐẶT HÀNG</h2>
      </div>
    </div>
    <?php
    if (isset($bill) && is_array($bill)) {
      extract($bill);
    }
    ?>
    <div class="mb">
      <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
      <div class="boxcontent">
        <li><strong>Mã đơn hàng</strong> : DH<?= $bill['id'] ?></li>
        <li><strong>Ngày đặt hàng</strong> : <?= $bill['ngaydathang'] ?></li>
        <li><strong>Tổng đơn hàng</strong> : <?= $bill['tong'] ?></li>
        <li><strong>Phương thức thanh toán</strong> : <?= getpttt($bill['pttt']); ?></li>
      </div>
    </div>
    <div class="mb">
      <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
      <div class="boxcontent formtaikhoan from-user-output">
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
            <td><strong>Nguời đặt hàng</strong> </td>
            <td class="from-user-output"><?= $user ?></td>
          </tr>
          <tr>
            <td><strong>Địa chỉ</strong> </td>
            <td class="from-user-output"><?= $diachi ?></td>
          </tr>
          <tr>
            <td><strong>Email</strong> </td>
            <td class="from-user-output"><?= $email ?></td>
          </tr>
          <tr>
            <td><strong>Điện thoại</strong> </td>
            <td class="from-user-output"><?= $sdt ?></td>
          </tr>
        </table>

      </div>
    </div>
    <div class="mb">
      <div class="boxtitle">THÔNG TIN SẢN PHẨM</div>
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
            billchitiet($billct);
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
