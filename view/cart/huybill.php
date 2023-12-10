
<div class="cart-content mb">
  <div class="boxtrai mr">
    <form action="index.php?act=huybill" method="post">
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
          <li><strong>Tổng đơn hàng</strong> : <?= number_format($bill['tong'], 0, '.', '.') ?></li>
          <li><strong>Trạng thái</strong> : <?= getttdh($bill['trangthai']) ?></li>
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
      </div>
      <div class=" mb10 formtaikhoan">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        <?php if($bill['trangthai']==0 || $bill['trangthai']==1){?>
        <input type="submit" name="huydonhang" value="Hủy đơn hàng" onclick="return confirm('Bạn chắc chắn muốn thực hiện hành động này?')">
        <?php } ?>
      </div>
    </form>
  </div>
</div>
