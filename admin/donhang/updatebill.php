<style>
  .cart-content {
    margin: 100px auto;
    width: 70%;
}

.mb {
    margin-bottom: 30px;
}

.mb10 {
    margin-bottom: 10px;
}


.ghinho {
    background-color: white;
    border: 1px #CCC solid;
    border-radius: 5px;
}


.frmtitle {
    background-color: #EEE;
    border: 1px #CCC solid;
    border-radius: 5px;
    color: #666;
    padding: 0px 20px;
    margin-bottom: 20px;
}

.frmdsloai {
    padding: 20px 0px
}

.frmdsloai div {
    margin-left: 5px;
    margin-right: 5px;
}

.frmdsloai table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}

.frmdsloai table th {
    padding: 20px;
    background-color: #afafaf;
    color: #373737;
}

.frmdsloai table td {
    padding: 30px 60px;
    border: 1px #c2c2c2 solid;
    background-color: #f6f6f6;
    font-size: 20px;
}
.frmdsloai table td i{
    font-size: 20px;
}
.frmdsloai table td i:hover{
    color: #666;
}
.mb10 {
    margin-bottom: 10px;
}

.search-form select,
.frmdsloai select {
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
}

.boxlogo{
    text-align: center;
    margin-bottom: 20px;
}

.boxtitle {
    color: #333;
    font-size: 18px;
    margin-bottom: 30px;
    
}

.boxcontent {
    min-height: 100px;
    padding: 20px
}

.boxcontent li {
    margin-bottom: 10px;
}

.boxcontent input[type="radio"] {
    margin: 0 5px 20px 0;
}

.box-thank {
    display: flex;
    justify-content: center;
    align-items: center;
}

.from-user-input input[type="text"] {
    width: 250px;
    margin: 10px 20px;
    
}

.from-user-output {
    padding: 10px 20px;
}
strong{
    font-size:14px ;
}

</style>
<div class="row">
<div class=" frmtitle">
            <h1>CHI TIẾT ĐƠN HÀNG</h1>
        </div>
<div class="cart-content mb">
  <div class="boxtrai mr">
    <form action="index.php?act=updatebill" method="post">
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
          <li><strong>Tổng đơn hàng</strong> : <?= $bill['tong']?> $</li>
          <li><select name="ttdh" id="">
              <?php
              
              for ($i=0; $i < 4; $i++) { 
                $load_trangthai = getttdh($i);
                if ($trangthai == $i)
                  echo '<option value="' . $i. '" selected>' .getttdh($i). '</option>';
                else
                  echo '<option value="' . $i . '">' .getttdh($i). '</option>';
              }
              ?>
            </select> </li>
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
              billchitiet_ad($billct);
              ?>
            </table>
          </div>
        </div>
      </div>
      <div class=" mb10 formtaikhoan">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
      </div>
    </form>
  </div>
</div>

</div>
