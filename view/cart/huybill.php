<style>
  .containerr {
    display: grid;
    grid-template-columns: 75% 25%;
    gap: 20px;
    height: auto;
    margin-top: 100px;
  }
  table {
  width: 90%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
}

th {
  background-color: #002c49;
  color: white;
  font-weight: bold;
  padding: 10px;
  text-align: left;
  height: 60px;
}

td {
  padding: 10px;
}
.bang{
  background-color: #f8f8f8;
  padding-left: 50px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.bang1{
  background-color: #f8f8f8;
  padding-left: 50px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.bang1 .boxcontent1 li {
  list-style-type: none; 
  display: list-item; 
  margin-bottom: 15px;
}
.boxcontent1{
  margin-top:40px;
}
.boxtitle{
  color: #002c49;
  font-weight: bold;
  margin: 40 10 30 20 ;
}
.mb100{
  margin-left: 50px;
  margin-top: 30px;
  margin-bottom: 40px;
}
</style>

</style>
<div class="cart-content mb">
  <div class="boxtrai mr">
    <form action="index.php?act=huybill" method="post">
      <?php
      if (isset($bill) && is_array($bill)) {
        extract($bill);
      }
      ?>
    <div class="containerr">
      <div class="bang">  
        <div class="boxtitle">THÔNG TIN SẢN PHẨM</div>
        <div class="boxcontent">
          <div class="mb10">
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

      <div class="bang1">
        <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
        <div class="boxcontent1">
          <li><strong>Mã đơn hàng</strong> : DH<?= $bill['id'] ?></li>
          <li><strong>Ngày đặt hàng</strong> : <?= $bill['ngaydathang'] ?></li>
          <li><strong>Tổng đơn hàng</strong> : <?= number_format($bill['tong'], 0, '.', '.') ?></li>
          <li><strong>Trạng thái</strong> : <?= getttdh($bill['trangthai']) ?></li>
        </div>

        <div class=" mb100 formtaikhoan">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        <?php if($bill['trangthai']==0 || $bill['trangthai']==1){?>
        <input type="submit" name="huydonhang" value="Hủy đơn hàng" onclick="return confirm('Bạn chắc chắn muốn thực hiện hành động này?')">
        <?php } ?>
      </div>
      </div>
    </div>
      
    </form>
  </div>
</div>
