<style>
  .tong{
    display: grid;
    grid-template-columns: 70% 30%; 
    gap: 20px;
    margin-top: 100px;
  }
  .frmdsctdh table {
    width: 90%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  
  .frmdsctdh th{
    background-color: #002c49;
    height: 60px;
    padding: 8px;
    text-align: center;
    color: white;
  }
  .frmdsctdh td{
    padding: 8px;
    text-align: center;
  }

  .frmdsloai {
    margin-bottom: 10px;
  }

  .frmdsloai input {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .frmdsloai input:hover {
    background-color: #0056b3;
  }
  .dh{
    background-color: #f8f8f8;
    padding-left: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .ctdhgiay{
    background-color: #f8f8f8;
    padding-left: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .ctdh{

  }
  .ctdh .boxcontent li{
    list-style-type: none; 
    display: list-item;
    margin-bottom: 15px;
  }
  .boxtitle1{
    color: #002c49;
    font-weight: bold;
    margin: 40 10 30 20 ;
    font-size: 20px;
  }
  .boxtitle{
    color: #002c49;
    font-size: 20px;
    font-weight: bold;
    padding-top: 35px;
    padding-left: 60px;
  }
  .mb100{
    margin-left: 50px;
    margin-top: 30px;
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
  </div>
  <div class="tong">
    <div class="ctdhgiay">
      <div class="boxtitle1">
        <p style="margin-bottom: 50px;">THÔNG TIN SẢN PHẨM</p>
      </div>
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

    <div class="dh">
      <div class="ctdh">
        <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
        <div class="boxcontent">
          <ul>
            <li><strong>Mã đơn hàng</strong> : DH<?= $bill['id'] ?></li>
            <li><strong>Ngày đặt hàng</strong> : <?= $bill['ngaydathang'] ?></li>
            <li><strong>Tổng đơn hàng</strong> : <?= number_format($bill['tong'], 0, '.', '.') ?> đ</li>
            <li><strong>Phương thức thanh toán</strong> : <?= getpttt($bill['pttt']); ?></li>
          </ul>
        </div>
      </div>

      <div class="ctdh">
        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
        <div class="boxcontent formtaikhoan from-user-output">
          <table>
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
      <div class="mb100 frmdsloai">
        <a href="index.php?act=sanpham"><input type="button" value="TIẾP TỤC MUA HÀNG"></a>
      </div>
    </div>
  </div>
</div>
