<style>
.ctdh {
    display: block;
    width: 100%;
    height: auto;
    background-color: #fff;
    border: 4px solid #ececec;
    padding: 20px 10px;
    z-index: 1;
    list-style: none;
    margin-bottom: 50px;
    
}
.ctdhgiay {
    width: auto;
    height: auto;
    background-color: #fff;
    border: 3px solid #ececec;
    min-height: 400px;
    /* Sử dụng min-height thay vì height */
    padding: 20px 20px;
    position: relative;
    z-index: 0;
}
.frmdsctdh table {
    width: 100%;
    border-collapse: collapse;
    color: rgb(0, 44, 73);
}

.frmdsctdh table th {
    height: 50px;
    padding: 0 40px 0 0;
    background-color: black;
    color: #ffffff;
    position: relative;
    z-index: 0;
    font-size: 16px;
}

.frmdsctdh table td {
    padding: 40px 20px;
    font-size: 16px;

}
.frmdsctdh table td img{
    width: auto;
    font-weight: bold;
} 
.frmdsctdh table td{
  border: 0.5px solid #ABB0B0;
  text-align: center;
}
</style>
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
    <div class="ctdh">
      <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
      <div class="boxcontent">
        <li><strong>Mã đơn hàng</strong> : DH<?= $bill['id'] ?></li>
        <li><strong>Ngày đặt hàng</strong> : <?= $bill['ngaydathang'] ?></li>
        <li><strong>Tổng đơn hàng</strong> : <?= number_format($bill['tong'], 0, '.', '.') ?> đ</li>
        <li><strong>Phương thức thanh toán</strong> : <?= getpttt($bill['pttt']); ?></li>
      </div>
    <div></div>
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
            $user = $_POST['name'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
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

    <div class="ctdhgiay">
    <div class="">
      <p style="margin-bottom: 50px;">THÔNG TIN SẢN PHẨM</p>
    </div>
          <!-- <div class="boxcontent"> -->
        <div class="frmdsctdh">
          <table>
            <tr>
              <th>Hình</th>
              <th>Sản phẩm</th>
              <th>Kích cỡ</th>
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
      <div class="mb10 frmdsloai">
                <a href="index.php?act=sanpham"><input type="button" value="TIẾP TỤC MUA HÀNG"></a>
          </div> 
    </div>
  </div>
</div>
